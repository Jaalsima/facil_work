<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\Livewire;

class UserForm1 extends Component
{
    public $name = '';
    public $email = '';

    public function render()
    {
        return view('livewire.user-form1');
    }

    public function nextStep()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $this->emit('stepCompleted', ['name' => $this->name, 'email' => $this->email]);

        return redirect()->to('/user-form-2');
    }
}
