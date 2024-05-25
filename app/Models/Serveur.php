<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serveur extends Model
{
    use HasFactory;
    protected $fillable=["id","Nomenclature","Adresse_IP","Nom_dutilisateur_console","Motdepasse_console","Nom_dutilisateur_domaine","Motdepasse_domaine","Guide_dutilisation","id_equipement"];
    public function equipment()
    {
        return $this->belongsTo(equipement::class,"id_equipement");
    }
    public function guide()
    {
        return $this->hasMany(Guide::class);
    }
}
