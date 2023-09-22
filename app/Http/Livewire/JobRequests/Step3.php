<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class Step3 extends Component
{
    public $place;
    protected $listeners = ['counter3'];

    public function counter3()
    {
        $this->emit('place2', $this->place);
        $this->emit('step', 1);
    }
    public function render()
    {
        return view('livewire.job-requests.step3');
    }
}