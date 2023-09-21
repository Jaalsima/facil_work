<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class JobRequests extends Component
{
    public $step = 1;
    public $jobRequest, $location, $place, $tools, $image, $date, $address;

    protected $listeners = ['jobRequest2', 'location2', 'step'];

    public function mount()
    {
        $this->jobRequest2($this->jobRequest);
    }

    public function step($st)
    {
        $this->step = $this->step + $st;
    }
    public function jobRequest2($jr)
    {
        $this->jobRequest = $jr;
    }
    public function location2($lot)
    {
        $this->location = $lot;
    }

    public function render()
    {
        return view('livewire.job-requests.job-requests');
    }

    public function before()
    {
        $this->step--;

    }
    public function next()
    {
        $this->emit('counter'.$this->step);
    }

}