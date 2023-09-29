<?php

namespace App\Http\Livewire\JobRequests\CreateJobRequest;

use Livewire\Component;

class Step3 extends Component
{
    public $c3Place;

    protected $listeners = [
        'currentStep3',
        'backStep3',
    ];

    public function currentStep3()
    {
        $this->emit('updatePlace', $this->c3Place);
        $this->emit('incrementStep');
    }

    public function backStep3()
    {
        $this->emit('decrementStep');
    }

    public function render()
    {
        return view('livewire.job-requests.create-job-request.step3');
    }
}
