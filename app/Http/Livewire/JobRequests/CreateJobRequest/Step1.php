<?php

namespace App\Http\Livewire\JobRequests\CreateJobRequest;

use App\Models\Category;
use Livewire\Component;

class Step1 extends Component
{
    public $c1Description = '';

    public $c1DescriptionEntered = false;

    public $c1CategoryEntered = false;

    public $c1SelectedCategory; // Variable para almacenar la categoría seleccionada

    public $c1SelectedSkill; // Variable para almacenar la habilidad seleccionada

    public $c1Categories;

    public $c1Skills; // Habilidades relacionadas con la categoría seleccionada

    protected $listeners = [
        'currentStep1',
    ];

    public function mount($c1DataDescription)
    {
        $this->c1Description = $c1DataDescription;
        $this->c1Categories = Category::get();
    }

    public function updatedC1selectedCategory()
    {
        // Cuando cambia la categoría seleccionada, actualiza la lista de habilidades
        if ($this->c1SelectedCategory) {
            $category = Category::find($this->c1SelectedCategory);
            $this->c1Skills = $category->skills;
        } else {
            $this->c1Skills = []; // Si no se selecciona una categoría, establece las habilidades en un array vacío
        }
    }

    public function currentStep1()
    {
        $this->c1DescriptionEntered = ! empty($this->c1Description);
        $this->c1CategoryEntered = ! empty($this->c1SelectedCategory);
        $this->emit('updateDescription', [
            'description' => $this->c1Description,
            'category' => $this->c1SelectedCategory,
            'skill' => $this->c1SelectedSkill,
        ]);
        if ($this->c1SelectedSkill) {
            $this->emit('incrementStep');
        }
    }

    public function render()
    {
        return view('livewire.job-requests.create-job-request.step1');
    }
}
