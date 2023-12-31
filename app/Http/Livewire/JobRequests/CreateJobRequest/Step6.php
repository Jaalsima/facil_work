<?php

namespace App\Http\Livewire\JobRequests\CreateJobRequest;

use Livewire\Component;

class Step6 extends Component
{
    public $c6Date;

    protected $listeners = [
        'currentStep6',
        'backStep6',
    ];

    public function currentStep6()
    {
        $this->emit('updateDate', $this->c6Date);
        $this->emit('incrementStep');
    }

    public function backStep6()
    {
        $this->emit('decrementStep');
    }

    public function render()
    {
        return view('livewire.job-requests.create-job-request.step6');
    }
}
