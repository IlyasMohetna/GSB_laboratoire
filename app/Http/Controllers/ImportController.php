<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\VilleImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function ville_import(Request $request){
        Excel::import(new VilleImport, $request->file('file'));
    }
}
