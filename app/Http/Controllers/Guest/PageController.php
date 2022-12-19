<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::select('*')->where('departure_date', '=', '2022-12-19')->get();
        return view('trains.index', compact('trains'));
    }
}
