<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserForm2 extends Component
{
    public $name;
    public $email;

    protected $listeners = ['stepCompleted'];

    public function stepCompleted($data)
    {
        $this->name = $data['name'];
        $this->email = $data['email'];
    }

    public function render()
    {
        return view('livewire.user-form2');

    }
}
