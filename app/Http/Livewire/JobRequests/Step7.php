<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class Step7 extends Component
{
    public $address;
    public function render()
    {
        return view('livewire.job-requests.step7');
    }
}