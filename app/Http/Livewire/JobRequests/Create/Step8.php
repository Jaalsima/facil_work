<?php

namespace App\Http\Livewire\JobRequests\Create;

use Livewire\Component;

class Step8 extends Component
{
    protected $listeners = [
        'currentStep8',
        'backStep8',
        'nonLogin',
    ];

    public function currentStep8()
    {
        $this->emit('submitJobRequest');
    }

    public function backStep8()
    {
        $this->emit('decrementStep');
    }

    public function nonLogin($foo)
    {
        $this->emit('jajs', [
            'description' => $foo['description'],
            'location' => $foo['location'],
            'place' => $foo['place'],
            'tools' => $foo['tools'],
            'image' => $foo['image'],
            'date' => $foo['date'],
            'address' => $foo['address'],
        ]);

    }

    public function render()
    {
        return view('livewire.job-requests.create.step8');
    }
}
