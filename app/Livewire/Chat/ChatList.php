<?php

namespace App\Livewire\Chat;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

class ChatList extends Component
{

    public $selectedUser = null;
    public $newUsers = [];
    protected $listeners = ['userSelected'];

    public function userSelected($userId)
    {
        $this->selectedUser = User::find($userId);
    }

    #[Layout('components.user.app')]
    #[Title('Chat List')]
    public function render()
    {
        return view('livewire.chat.chat-list');
    }
}
