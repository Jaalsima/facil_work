<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class JobRequests extends Component
{
    public $step = 1;
    public $jobRequest;

    public function render()
    {
        return view('livewire.job-requests.job-requests');
    }

    public function after()
    {
        $this->step++;
    }
}
