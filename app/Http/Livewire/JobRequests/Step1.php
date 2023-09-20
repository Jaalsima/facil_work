<?php

namespace App\Http\Livewire\JobRequests;

use Livewire\Component;
use App\Models\Category;

class Step1 extends Component
{
    public $jobRequest = '';

    public function render()
    {
        return view('livewire.job-requests.step1');
    }

    protected $rules = [
        'jobRequest' => 'required',
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
        ]);
    }
}