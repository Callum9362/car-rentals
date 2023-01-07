<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class CarsTableComponent extends Component
{
    public $success;

    protected $listeners = [
        'carAdded' => 'render',
        'carDeleted' => '$refresh'
    ];

    public function render()
    {
        $cars = Car::all();
        return view('livewire.cars-table-component')
            ->with('success', $this->success)
            ->with('cars', $cars);
    }

    public function delete($id)
    {
        $car = Car::find($id);
        $car->delete();
        $this->success = 'Car was deleted successfully!';
        $this->emit('carDeleted');
    }
}
