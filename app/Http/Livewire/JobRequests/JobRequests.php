<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class JobRequests extends Component
{

    public $tempData = [];

    public function render()
    {
        return view('livewire.job-requests.job-requests');
    }

    public function saveTemporalData($field, $value)
    {
        $this->tempData[$field] = $value;
    }

    public function nextStep($step)
    {
        $this->emit('nextStep', $step);
    }
}
