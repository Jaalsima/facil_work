<?php

namespace App\Http\Livewire\JobRequests\CreateJobRequest;

use Livewire\Component;

class Step2 extends Component
{
    public $c2Location = '';

    protected $listeners = [
        'currentStep2',
        'backStep2',
    ];

    public function currentStep2()
    {
        $this->emit('updateLocation', $this->c2Location);
        $this->emit('incrementStep');
    }

    public function backStep2()
    {
        $this->emit('decrementStep');
    }

    public function render()
    {
        return view('livewire.job-requests.create-job-request.step2');
    }
}
