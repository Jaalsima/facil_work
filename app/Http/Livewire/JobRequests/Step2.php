<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class Step2 extends Component
{
    public $location;

    public function render()
    {
        return view('livewire.job-requests.step2');
    }
}