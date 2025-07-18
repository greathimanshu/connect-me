<?php

namespace App\Livewire\Components\User\Partials;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ChatSideBar extends Component
{
    public $users;
    public $search = '';
    public $selectedUserId = null;
    public function mount()
    {
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
                    $q->select('receiver_id')
                        ->from('chats')
                        ->where('sender_id', $authId);
                })->orWhereIn('id', function ($q) use ($authId) {
                    $q->select('sender_id')
                        ->from('chats')
                        ->where('receiver_id', $authId);
                });
            })
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            })
            ->get();
    }


    public function selectUser($userId)
    {
        $this->selectedUserId = $userId;
        $this->dispatch('userSelected', $userId);
    }

    public function render()
    {
        return view('livewire.components.user.partials.chat-side-bar');
    }
}
