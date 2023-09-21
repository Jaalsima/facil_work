<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class Step4 extends Component
{
    public Bool $tools;
    public function render()
    {
        return view('livewire.job-requests.step4');
    }
}