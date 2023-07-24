<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\User;

class UserTable extends DataTableComponent
{
    protected $model = User::class;
    public ?bool $searchFilterLazy = true;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->searchable(),
            Column::make("Nombre", "name")
                ->sortable()
                ->searchable(),
            Column::make("Correo Electrónico", "email")
                ->sortable()
                ->searchable(),
            Column::make("Contraseña", "password")
                ->sortable(),
            Column::make("Ubicación", "location")
                ->sortable()
                ->searchable(),
            Column::make("Foto", "profile_photo_path")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable()
                ->searchable(),
            Column::make("Updated at", "updated_at")
                ->sortable()
                ->searchable(),
        ];
    }
}
