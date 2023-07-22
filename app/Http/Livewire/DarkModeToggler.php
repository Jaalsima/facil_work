<?php

// app/Http/Livewire/DarkModeToggler.php

namespace App\Http\Livewire;

use Livewire\Component;

class DarkModeToggler extends Component
{
    public $isDarkMode = false; // Asigna un valor inicial a la variable

    public function toggleDarkMode()
    {
        $this->isDarkMode = !$this->isDarkMode;
        // Lógica para alternar el modo oscuro
    }

    public function render()
    {
        return view('livewire.dark-mode-toggler');
    }
}
