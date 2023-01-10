<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index($locationID)
    {
        $rentals = Rental::where('location_id', $locationID)->get();
        dd($rentals);
        return view('pages.rentals')
            ->with('rentals', $rentals);
    }
}
