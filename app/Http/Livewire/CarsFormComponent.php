<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;

class CarsFormComponent extends Component
{
    public string $model;
    public string $make;
    public string $license_plate;
    public string $year;
    public $success;

    public function render()
    {
        return view('livewire.cars-form-component', [
            'success' => $this->success,
        ]);
    }

    public function rules()
    {
        return [
            'make' => 'required|min:3',
            'model' => 'required',
            'license_plate' => 'required|min:8',
            'year' => 'required',
        ];
    }

    public function createCar()
    {
        $this->validate();
        $car = new Car();
        $car->make = $this->make;
        $car->model = $this->model;
        $car->license_plate = $this->license_plate;
        $car->year = $this->year;
        $car->save();
        $this->success = 'Message sent successfully!';
        $this->emit('carAdded');
        $this->refresh();
    }

    public function refresh()
    {
        $this->make = "";
        $this->model = "";
        $this->license_plate = "";
        $this->year = "";
    }

}
