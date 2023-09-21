<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class Step2 extends Component
{
    public $location;
    protected $listeners = ['counter2'];

    public function counter2()
    {
        $this->emit('location2', $this->location);
        $this->emit('step', 1);
    }

    public function render()
    {
        return view('livewire.job-requests.step2');
    }
}