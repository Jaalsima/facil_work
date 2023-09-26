<?php

namespace App\Http\Livewire\JobRequests\Create;

use App\Models\Category;
use Livewire\Component;

class Step1 extends Component
{
    public $description = '';

    public $category = null;

    public $categories;

    protected $listeners = [
        'currentStep1',
    ];

    public function mount($description)
    {
        $this->description = $description;
        $this->categories = Category::get();
    }

    public function currentStep1()
    {
        $this->emit('updateDescription', $this->description);
        $this->emit('incrementStep');
    }

    public function render()
    {
        return view('livewire.job-requests.create.step1');
    }
}
