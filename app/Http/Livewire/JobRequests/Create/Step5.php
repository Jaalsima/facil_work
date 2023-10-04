<?php

// app/Http/Livewire/JobRequests/Create/Step5.php

namespace App\Http\Livewire\JobRequests\Create;

use Livewire\Component;
use Livewire\WithFileUploads;

class Step5 extends Component
{
    use WithFileUploads;

    public $image = "No";
    public $imagePaths = [];

    protected $rules = [
        'image' => 'required',
    ];
    protected $listeners = [
        'currentStep5',
        'backStep5',
    ];

    public function currentStep5()
    {
        $this->validate();
        $this->emit('updateImage', $this->image);
        $this->emit('incrementStep');
    }

    public function backStep5()
    {
        $this->emit('decrementStep');
    }

    public function saveImages()
    {
        $paths = [];

        foreach ($this->imagePaths as $image) {
            $path = $image->store('job_request_images', 'public');
            $paths[] = $path;
        }

        $this->emit('updateImagePaths', $paths);
    }

    public function render()
    {
        return view('livewire.job-requests.create.step5');
    }
}
