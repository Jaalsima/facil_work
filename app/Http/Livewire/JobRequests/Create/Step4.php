<?php

namespace App\Http\Livewire\JobRequests\Create;

use Livewire\Component;

class Step4 extends Component
{
    public $tools;

    protected $listeners = [
        'currentStep4',
        'backStep4',
    ];

    public function currentStep4()
    {
        $this->emit('updateTools', $this->tools);
        $this->emit('incrementStep');
    }

    public function backStep4()
    {
        $this->emit(
            'decrementStep'
        );
    }

    public function render()
    {
        return view('livewire.job-requests.create.step4');
    }
}
