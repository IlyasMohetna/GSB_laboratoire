<?php

namespace App\Models\VISITE;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Praticien extends Model
{
    use HasFactory;

    protected $table = 'visite__praticien';
    protected $primaryKey = 'id_praticien';
    protected $guarded = [];
}
