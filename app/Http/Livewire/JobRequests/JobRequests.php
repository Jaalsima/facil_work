<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class JobRequests extends Component
{
    public $step = 1;
    public $jobRequest, $location, $place, $tools, $image, $date, $address;

    protected $listeners = ['jobRequest2', 'location2', 'place2', 'tools2', 'image2', 'date2', 'address2', 'step'];

    public function mount()
    {
        $this->jobRequest2($this->jobRequest);
    }

    public function jobRequest2($jobRequest)
    {
        $this->jobRequest = $jobRequest;
    }
    public function location2($location)
    {
        $this->location = $location;
    }

    public function place2($place)
    {
        $this->place = $place;
    }

    public function tools2($tools)
    {
        $this->tools = $tools;
    }

    public function image2($image)
    {
        $this->image = $image;
    }

    public function date2($date)
    {
        $this->date = $date;
    }

    public function address2($address)
    {
        $this->address = $address;
    }

    public function render()
    {
        return view('livewire.job-requests.job-requests');
    }

    public function step()
    {
        $this->step++;
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