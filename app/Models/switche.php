<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class switche extends Model
{
    use HasFactory;
    protected $fillable=["id","Division","Nom_hôte","Adresse_Mac","Port_mural","Interface","VLAN","login","Motdepasse","id_div","id_equipement"];
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
