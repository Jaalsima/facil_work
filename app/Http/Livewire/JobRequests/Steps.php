<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class Steps extends Component
{
    public $contador = 1;
    public $jobRequest, $location, $house, $place;


    public function before()
    {
        $this->contador--;

    }
    public function next()
    {
        $this->contador++;
    }

    public function render()
    {
        return view('livewire.job-requests.steps');
    }
}
