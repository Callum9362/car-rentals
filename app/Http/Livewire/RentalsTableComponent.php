<?php

namespace App\Http\Livewire;

use App\Models\Rental;
use Livewire\Component;

class RentalsTableComponent extends Component
{
    public $success;
    public $locationID;

    protected $listeners = [
        'rentalDeleted' => '$refresh'
    ];

    public function mount($locationID)
    {
        $this->locationID = $locationID;
    }

    public function render()
    {
        $rentals = Rental::where('location_id', $this->locationID)->get();
        return view('livewire.rentals-table')
            ->with('success', $this->success)
            ->with('rentals', $rentals);
    }

    public function delete($id)
    {
        $rental = Rental::find($id);
        $rental->delete();
        $this->success = 'Rental was deleted successfully!';
        $this->emit('rentalDeleted');
    }
}
