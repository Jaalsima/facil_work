<?php

namespace App\Http\Livewire\JobRequests\CreateJobRequest;

use Livewire\Component;

class Step5 extends Component
{
    public $c5Image;

    protected $listeners = [
        'currentStep5',
        'backStep5',
    ];

    public function currentStep5()
    {
        $this->emit('updateImage', $this->c5Image);
        $this->emit('incrementStep');
    }

    public function backStep5()
    {
        $this->emit('decrementStep');
    }

    public function render()
    {
        return view('livewire.job-requests.create-job-request.step5');
    }
}
