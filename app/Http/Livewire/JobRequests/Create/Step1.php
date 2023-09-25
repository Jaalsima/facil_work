<?php

namespace App\Http\Livewire\JobRequests\Create;

use Livewire\Component;

class Step1 extends Component
{
    public $description = ''; 
    public function updateDescription()
    {
        $this->emit('updateDescription', $this->description);
        $this->emit('incrementStep'); // Avanza al siguiente paso en el componente padre
    }

    public function render()
    {
        return view('livewire.job-requests.create.step1');
    }
}