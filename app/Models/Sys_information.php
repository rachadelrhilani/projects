<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sys_information extends Model
{
    use HasFactory;
    protected $fillable=["id","Système_dinformation","Lien","Login_administrateur","Motdepasse_administrateur","Login_utilisateur","Motdepasse_utilisateur","id_div","id_equipement"];
    public function division()
    {
        return $this->belongsTo(Division::class,"id_div");
    }
    public function equipment()
    {
        return $this->belongsTo(equipement::class,"id_equipement");
    }
    public function guide()
    {
        return $this->hasMany(Guide::class);
    }

}
