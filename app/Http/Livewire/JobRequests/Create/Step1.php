<?php

namespace App\Http\Livewire\JobRequests\Create;

use App\Models\Category;
use Livewire\Component;

class Step1 extends Component
{
    public $description = '';

    public $selectedCategory; // Variable para almacenar la categoría seleccionada

    public $selectedSkill; // Variable para almacenar la habilidad seleccionada

    public $categories;

    public $skills; // Habilidades relacionadas con la categoría seleccionada

    protected $listeners = [
        'currentStep1',
    ];

    public function mount($description)
    {
        $this->description = $description;
        $this->categories = Category::get();
    }

    public function updatedSelectedCategory()
    {
        // Cuando cambia la categoría seleccionada, actualiza la lista de habilidades
        if ($this->selectedCategory) {
            $category = Category::find($this->selectedCategory);
            $this->skills = $category->skills;
        } else {
            $this->skills = []; // Si no se selecciona una categoría, establece las habilidades en un array vacío
        }
    }

    public function currentStep1()
    {
        $this->emit('updateDescription', [
            'description' => $this->description,
            'category' => $this->selectedCategory,
        ]);
        $this->emit('incrementStep');
    }

    public function render()
    {
        return view('livewire.job-requests.create.step1');
    }
}
