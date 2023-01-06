<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class CarsTableComponent extends Component
{
    protected $listeners = ['carAdded' => 'render'];

    public function render()
    {
        $cars = Car::all();
        return view('livewire.cars-table-component')
            ->with('cars', $cars);
    }
}