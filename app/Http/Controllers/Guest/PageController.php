<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;

class PageController extends Controller
{
    public function index() {
        $trains = Train::select( 'company', 'train_station_start', 'train_station_last', 'departure', 'arrival')->whereDate('departure', Carbon::today())->orderByDesc('departure')->get();
        // Train::where('departure', Carbon::now()->isCurrentUnit('day') )->get()
        // Train::all()
        // dd($trains);
        return view('welcome', compact('trains'));
    }
}
