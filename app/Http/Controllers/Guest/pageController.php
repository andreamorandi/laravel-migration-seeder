<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_date', '>=', Train::raw('curdate()'))->get();
        return view('trains.index', compact('trains'));
    }
}
