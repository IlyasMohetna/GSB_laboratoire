<?php

namespace App\Models\FRAIS;

use Illuminate\Database\Eloquent\Model;

class Nature extends Model
{
    protected $table = 'frais__nature';
    protected $primaryKey = 'id_nature';
    protected $guarded = [];
}
