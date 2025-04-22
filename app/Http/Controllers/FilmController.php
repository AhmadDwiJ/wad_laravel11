<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    //
    public function index()
    {

        $films = DB::select('select * from film');
        return view('dashboard', compact ('films'));
    }
}
