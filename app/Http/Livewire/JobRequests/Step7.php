<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class Step7 extends Component
{
    public $address;
    protected $listeners = ['counter7'];

    public function counter7()
    {
        $this->emit('address2', $this->address);
        $this->emit('step', 1);
    }
    public function render()
    {
        return view('livewire.job-requests.step7');
    }
}