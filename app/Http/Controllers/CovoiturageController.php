<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PARAMETRAGE\Ville;

class CovoiturageController extends Controller
{
    public function create_show()
    {
        return view('covoiturage.create');
    }

    public function ville_lookup()
    {
        $query = request()->search;
        $search = Ville::where('nom', 'LIKE', '%'.$query ?? ''.'%')->limit(10)->get();
        dd($search);
    }
}
