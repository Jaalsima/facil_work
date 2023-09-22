<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class Step4 extends Component
{
    public $tools;

    protected $listeners = ['counter4'];

    public function counter4()
    {
        $this->emit('tools2', $this->tools);
        $this->emit('step', 1);
    }
    public function render()
    {
        return view('livewire.job-requests.step4');
    }
}