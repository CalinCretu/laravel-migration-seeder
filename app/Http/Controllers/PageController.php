<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $trains = Train::all();
        // dd($trains);

        return view('home', compact('trains'));
    }
}
