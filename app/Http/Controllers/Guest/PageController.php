<?php

namespace App\Http\Controllers\Guest;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $trains = Train::all();
        // $trains = Train::whereDate('departure_date', now()->format('Y-m-d'))->get();
        // $trains = Train::whereDate('departure_date', '>=', Carbon::today())->get();
        $trains = Train::where('on_schedule', '1')->get();
        return view('homepage', compact('trains'));
    }
}
