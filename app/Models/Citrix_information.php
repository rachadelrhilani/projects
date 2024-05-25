<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citrix_information extends Model
{
    use HasFactory;
    protected $fillable=["id","Entité","Chef_Entity","Login","Nouveau_login1","Password1","Colaborateur","Login2","Nouveau_Login2","Password2","AALS_CAIDAT","ADDRESS_IP","LOGIN3","PASSWORD3","BEC","Adresse_IP","LastName","Username","MotdePasse","id_citrix"];
    public function Citrix()
    {
        return $this->belongsTo(Citrix::class,"id_citrix");
    }
    public function guide()
    {
        return $this->hasMany(Guide::class);
    }
}
