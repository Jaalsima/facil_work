<?php

namespace App\Http\Livewire\JobRequests\Create;

use Livewire\Component;

class Step2 extends Component
{
    public $location = ''; // Propiedad para capturar la ubicación ingresada por el usuario

    public function updateLocation()
    {
        // Emitir un evento para actualizar la ubicación en el componente padre
        $this->emit('updateLocation', $this->location);
        $this->emit('incrementStep'); // Avanzar al siguiente paso en el componente padre
    }

    public function render()
    {
        return view('livewire.job-requests.create.step2');
    }
}