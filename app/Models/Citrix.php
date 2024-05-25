<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citrix extends Model
{
    use HasFactory;
    protected $fillable=["id","Nom"];
    public function Citrix_information()
    {
        return $this->hasMany(Citrix_information::class);
    }
}
