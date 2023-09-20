<?php
// app/Http/Livewire/JobRequests/Create.php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;
use App\Models\Category; // Asegúrate de importar el modelo Category aquí

class Create extends Component
{
    public $jobRequest = '';
    public $category = '';
    public $categoriesWithSkills = []; // Agrega esta variable para almacenar las categorías con habilidades

    public function render()
    {
        // Recupera las categorías con sus habilidades
        $this->categoriesWithSkills = Category::with('skills')->get();

        return view('livewire.job-requests.create');
    }

    protected $rules = [
        'jobRequest' => 'required',
        'category' => 'required',
    ];

    public function submitForm()
    {
        // Valida los datos del formulario
        $this->validate();

        // Almacena los datos ingresados en el estado del componente
        $this->storeFormData();

        // Redirige al usuario a la siguiente vista (job-request.step2)
        return redirect()->route('job-requests.step2');
    }

    // Método para almacenar los datos ingresados en el estado del componente
    private function storeFormData()
    {
        // Puedes almacenar los datos en una variable de sesión o en propiedades del componente, según tus necesidades.
        session([
            'jobRequest' => $this->jobRequest,
            'category' => $this->category,
        ]);
    }
}