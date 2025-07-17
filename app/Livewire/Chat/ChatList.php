<?php

namespace App\Livewire\Chat;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

class ChatList extends Component
{
    #[Layout('components.user.auth')]
    #[Title('Chat List')]
    public function render()
    {
        return view('livewire.chat.chat-list');
    }
}
