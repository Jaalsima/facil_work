<?php

namespace App\Http\Livewire\JobRequests\Create;

use Livewire\Component;

class Step5 extends Component
{
public $image;

protected $listeners = ['counter5'];

    public function counter5()
    {
        $this->emit('image2', $this->image);
        $this->emit('step', 1);
    }
public function render()
    {
        return view('livewire.job-requests.create.step5');
    }
}