<?php

namespace App\Http\Livewire\JobRequests\CreateJobRequest;

use Livewire\Component;

class Step4 extends Component
{
    public $c4Tools;

    protected $listeners = [
        'currentStep4',
        'backStep4',
    ];

    public function currentStep4()
    {
        $this->emit('updateTools', $this->c4Tools);
        $this->emit('incrementStep');
    }

    public function backStep4()
    {
        $this->emit('decrementStep'
        );
    }

    public function render()
    {
        return view('livewire.job-requests.create-job-request.step4');
    }
}
