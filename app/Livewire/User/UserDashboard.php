<?php

namespace App\Livewire\User;

use Livewire\Attributes\Title;
use Livewire\Component;

class UserDashboard extends Component
{
    #[Title('User Dashboard')]
    public function render()
    {
        return view('livewire.user.user-dashboard');
    }
}
