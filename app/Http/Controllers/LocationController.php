<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Rental;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('pages.locations')
            ->with('locations', $locations);
    }
}
