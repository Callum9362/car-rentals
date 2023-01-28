<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function index($locationID)
    {
        return view('pages.rentals')
            ->with('locationID', $locationID);
    }

    public function view($id)
    {
        $rental = Rental::find($id);
        return view('pages.rental')
            ->with('rental', $rental);
    }
}
