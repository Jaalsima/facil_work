<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class Step6 extends Component
{
public $date;

protected $listeners = ['counter6'];

    public function counter6()
    {
        $this->emit('date2', $this->date);
        $this->emit('step', 1);
    }
public function render()
    {
        return view('livewire.job-requests.step6');
    }
}