<?php

namespace App\Models\PARAMETRAGE;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'parametrage__region';
    protected $primaryKey = 'region_id';
    protected $guarded = [];
}
