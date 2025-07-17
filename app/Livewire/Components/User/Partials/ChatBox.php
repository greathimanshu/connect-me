<?php

namespace App\Livewire\Components\User\Partials;

use Livewire\Component;
use App\Models\User;

class ChatBox extends Component
{
    public User|null $selectedUser = null;

    protected $listeners = ['userSelected' => 'setUser'];

    public function setUser($userId)
    {
        $this->selectedUser = User::find($userId);
    }

    public function render()
    {
        return view('livewire.components.user.partials.chat-box');
    }
}

