<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class MainController extends Controller
{
    public function index() {
        // $trains = Train::all();
        $trains = Train::orderBy('stazione_di_partenza')
            ->orderBy('orario_di_partenza')
            ->get();

        return view('home', compact('trains'));
        // return view('home');
    }
}
