<?php

namespace App\Livewire\Chat;

use App\Events\MessageSentEvent;
use App\Models\Chat;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\On;

class ChatList extends Component
{

    public $selectedUser = null;
    public $newUsers = [];

    public $users;
    public $chatMessages = [];
    public ?int $replyToId = null;
    public $attachment;
    public string $message = '';
    public $search = '';
    public $selectedUserId = null;
    public $senderId = null;
    public function mount()
    {
        $this->senderId = Auth::id();
        $this->loadUsers();
    }

    public function updatedSearch()
    {
        $this->loadUsers();
    }

    public function loadUsers()
    {
        $authId = Auth::id();

        $this->users = User::where('id', '!=', $authId)
            ->where(function ($query) use ($authId) {
                $query->whereIn('id', function ($q) use ($authId) {
                    $q->select('receiver_id')->from('chats')->where('sender_id', $authId);
                })->orWhereIn('id', function ($q) use ($authId) {
                    $q->select('sender_id')->from('chats')->where('receiver_id', $authId);
                });
            })
            ->with(['latestMessage' => function ($q) use ($authId) {
                $q->where(function ($q2) use ($authId) {
                    $q2->where('sender_id', $authId)->orWhere('receiver_id', $authId);
                })->latest('created_at');
            }])
            ->when($this->search, function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('username', 'like', '%' . $this->search . '%');
                });
            })
            ->get();
    }

    public function loadMessages()
    {
        if ($this->selectedUser) {
            $this->chatMessages = Chat::with('sender:id,name', 'receiver:id,name')->where(function ($query) {
                $query->where('sender_id', Auth::id())
                    ->where('receiver_id', $this->selectedUser->id);
            })->orWhere(function ($query) {
                $query->where('sender_id', $this->selectedUser->id)
                    ->where('receiver_id', Auth::id());
            })
                ->orderBy('created_at', 'desc')
                ->get();
        }
    }

    public function sendMessage()
    {

        if (!$this->selectedUser || (empty($this->message) && !$this->attachment)) {
            return;
        }

        $this->validate([
            'message' => 'nullable|string|max:5000',
            'attachment' => 'nullable|file|max:10240', // 10MB
        ]);

        $type = 'text';
        $attachmentPath = null;

        if ($this->attachment) {
            $attachmentPath = $this->attachment->store('attachments', 'public');

            $mime = $this->attachment->getMimeType();
            if (str_contains($mime, 'image')) {
                $type = 'image';
            } elseif (str_contains($mime, 'video')) {
                $type = 'video';
            } else {
                $type = 'file';
            }
        }

        $sentMessage = $this->saveMessage();
        // $this->chatMessages[] = $sentMessage;
        $this->loadMessages();
        broadcast(new MessageSentEvent($sentMessage));
        $this->reset(['message', 'attachment', 'replyToId']);

        $this->dispatch('clearChatInput');
    }

    // #[On('echo-private:chat-channel.{senderId}', 'MessageSentEvent')]
    public function getListeners()
    {
        return [
            "echo-private:chat-channel.{$this->senderId},MessageSentEvent" => 'listenMessage',
        ];
    }

    public function listenMessage($event)
    {
        $chat = Chat::with('sender:id,name', 'receiver:id,name')
            ->find($event['message']['id']);

        if ($chat) {
            $this->chatMessages = $this->chatMessages->prepend($chat);
        }
    }

    public function saveMessage()
    {
        return Chat::create([
            'sender_id'     => Auth::id(),
            'receiver_id'   => $this->selectedUser->id,
            'message'       => $this->message,
            // 'attachment'    => $attachmentPath,
            'message_type'  => 'text',
            'reply_to_id'   => $this->replyToId,
            'status'        => 'sent',
            'sent_at'       => Carbon::now(),
            'meta'          => null,
        ]);
    }
    public function selectUser($userId)
    {
        $this->selectedUser = User::find($userId);
        $this->loadMessages();
    }

    #[Layout('components.user.app')]
    #[Title('Chat List')]
    public function render()
    {
        return view('livewire.chat.chat-list');
    }
}
