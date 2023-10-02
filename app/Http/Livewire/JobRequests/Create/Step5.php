<?php

namespace App\Http\Livewire\JobRequests\Create;

use Livewire\Component;
use Livewire\WithFileUploads;

class Step5 extends Component
{
    use WithFileUploads;

    public $hasImage = false;
    public $images = [];

    protected $listeners = [
        'currentStep5',
        'backStep5',
    ];

    public function currentStep5()
    {
        $this->emit('updateImage', ['hasImage' => $this->hasImage, 'images' => $this->images ]);

        $this->emit('incrementStep');
    }

    public function backStep5()
    {
        $this->emit('decrementStep');
    }

    public function updatedHasImage()
    {
        if (!$this->hasImage) {
            $this->images = [];
        }
    }

    public function render()
    {
        return view('livewire.job-requests.create.step5');
    }
}