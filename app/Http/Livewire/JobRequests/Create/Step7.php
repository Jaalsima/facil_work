<?php

namespace App\Http\Livewire\JobRequests\Create;

use Livewire\Component;

class Step7 extends Component
{
    public $address;
    protected $listeners = ['counter7'];

    public function counter7()
    {
        $this->emit('address2', $this->address);
        $this->emit('decrementStep');
        $this->emit('save');

    }
    public function render()
    {
        return view('livewire.job-requests.create.step7');
    }
}