<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class JobRequests extends Component
{
    public $step = 1;
    public $jobRequest, $location, $place, $tools, $image, $date, $address;
    public $data = [];

    protected $listeners = ['data'];

    public function data($data)
    {
        $this->data[] = $data;
        foreach ($data as $data) {
            $this->jobRequest = $data['JobRequest'];
        }
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
        $this->step++;
    }
}