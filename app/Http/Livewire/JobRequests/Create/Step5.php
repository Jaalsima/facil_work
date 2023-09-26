<?php

namespace App\Http\Livewire\JobRequests\Create;

use Livewire\Component;

class Step5 extends Component
{
    public $image;

    protected $listeners = [
        'currentStep5',
        'backStep5',
    ];

    public function currentStep5()
    {
        $this->emit('updateImage', $this->image);
        $this->emit('incrementStep');
    }

    public function backStep5()
    {
        $this->emit('decrementStep');
    }

    public function render()
    {
        return view('livewire.job-requests.create.step5');
    }
}
