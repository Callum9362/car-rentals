<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use DateTime;
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
        $total = self::calculateTotalPrice($rental);
        return view('pages.rental')
            ->with('total', $total)
            ->with('rental', $rental);
    }

    private function calculateTotalPrice($rental)
    {
        $start = new DateTime($rental->start);
        $end =  new DateTime($rental->end);
        $rate = $rental->rate;
        $diff = date_diff($start, $end);
        $days = $diff->days;
        return $rate * $days;
    }
}
