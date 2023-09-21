<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class Step2 extends Component
{
    public $jobRequest;

    protected $listeners = ['nextStep', 'saveTemporalData'];

    public function loadDataFromPreviousStep($step)
    {
        if ($step == 1) {
            $this->jobRequest = $this->tempData['jobRequest'];
        }
    }

    public function render()
    {
        return view('livewire.job-requests.step2');
    }
}
