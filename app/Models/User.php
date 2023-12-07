<?php 

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasRoles;

    protected $table = 'employe__employe';
    // protected $fillable = ['utilisateur', 'mot_de_passe'];
    protected $primaryKey = 'code_employe';
    public $timestamps = true;

    public function getAuthPassword(){  
        return $this->mot_de_passe;
    }

    public function setPasswordAttribute($value)
    {
        $this->mot_de_passe = bcrypt($value);
    }

    //--- Jointure

    public function Fonction()
    {
        return $this->hasOne(\App\Models\EMPLOYE\Fonction::class, 'code_fonction', 'code_fonction');
    }
}
