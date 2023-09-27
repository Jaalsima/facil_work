<?php

namespace App\Http\Livewire\JobRequests\CreateJobRequest;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Step8 extends Component
{
    protected $listeners = [
        'currentStep8',
        'backStep8',
    ];

    public function currentStep8()
    {
        if (Auth::check()) {
            $this->emit('submitJobRequest');
        }
    }

    public function backStep8()
    {
        $this->emit('decrementStep');
    }

    public function render()
    {
        return view('livewire.job-requests.create-job-request.step8');
    }
}
