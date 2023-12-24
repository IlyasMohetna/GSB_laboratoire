<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class FraisController extends Controller
{
    public function visiteurs_show()
    {
        $visiteurs = User::where('code_fonction', 2)->get();
        return view('frais.visiteurs', ['visiteurs' => $visiteurs]);
    }

    public function recap_show($id_visiteur = NULL)
    {
        Carbon::setLocale('fr');
        $startMonth = Carbon::createFromDate(2024, 1, 1)->startOfYear();
        $months = [];
        for ($i = 0; $i < 12; $i++) {
            $months[] = $startMonth->copy()->addMonths($i);
        }

        $visiteur = User::where('code_employe', $id_visiteur ?? auth()->user()->code_employe)->first();

        return view('frais.recap', ['months' => $months, 'visiteur' => $visiteur]);
    }
}
