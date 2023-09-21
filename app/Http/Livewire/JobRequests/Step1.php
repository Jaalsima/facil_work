<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class Step1 extends Component
{
    public $jobRequest;

    public function render()
    {
        return view('livewire.job-requests.step1');
    }

    public function saveTemporalData()
    {
        $this->emitUp('saveTemporalData', 'jobRequest', $this->jobRequest);
        $this->emitUp('nextStep', 2);
    }
}
