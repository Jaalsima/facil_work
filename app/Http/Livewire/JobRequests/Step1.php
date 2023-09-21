<?php
namespace App\Http\Livewire\JobRequests;

use Livewire\Component;

class Step1 extends Component
{
    public $jobRequest;

    protected $listeners = ['counter1'];

    public function counter1()
    {
        $this->emit('jobRequest2', $this->jobRequest);
        $this->emit('step', 1);
    }

    public function render()
    {
        return view('livewire.job-requests.step1');
    }

    // Método para emitir el valor de $jobRequest al componente padre
    // public function updateJobRequest()
    // {
    //     $this->emitUp('updateJobRequest', $this->jobRequest);
    // }
}