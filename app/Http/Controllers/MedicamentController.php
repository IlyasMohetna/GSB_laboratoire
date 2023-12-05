<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicamentController extends Controller
{
    public function all_medicament(){
        $tous_mes_medicaments = Medicament::all();
    }
}
