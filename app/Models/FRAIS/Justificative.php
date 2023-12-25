<?php

namespace App\Models\FRAIS;

use Illuminate\Database\Eloquent\Model;

class Justificative extends Model
{
    protected $table = 'frais__justificative';
    protected $primaryKey = 'id_justif';
    protected $guarded = [];
}
