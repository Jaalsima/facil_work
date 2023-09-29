<?php

namespace App\Http\Livewire\JobRequests\CreateJobRequest;

use Livewire\Component;

class Step7 extends Component
{
    public $c7Address;

    protected $listeners = [
        'currentStep7',
        'backStep7',
    ];

    public function currentStep7()
    {
        $this->emit('incrementStep');
        $this->emit('updateAddress', $this->c7Address);

    }

    public function backStep7()
    {
        $this->emit('decrementStep');
    }

    public function render()
    {
        return view('livewire.job-requests.create-job-request.step7');
    }
}
