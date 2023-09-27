<?php

namespace App\Http\Livewire\JobRequests;

use App\Models\JobRequest;
use Livewire\Component;

class ShowJobRequest extends Component
{
    public $jobRequest;

    public $open = false;

    public function mount(JobRequest $jobRequest)
    {
        $this->jobRequest = $jobRequest;
    }

    public function render()
    {
        return view('livewire.job-requests.show-job-request');
    }
}
