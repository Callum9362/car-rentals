<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index($locationID)
    {
        $rentals = Rental::where('location_id', $locationID)->get();
        return view('pages.rentals')
            ->with('rentals', $rentals);
    }

    public function view($id)
    {
        $rental = Rental::find($id);
        return view('pages.rental')
            ->with('rental', $rental);
    }
}
