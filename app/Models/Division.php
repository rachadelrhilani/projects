<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;
    protected $fillable=["id","Nom"];
    public function switche()
    {
        return $this->hasMany(switche::class);
    }
    public function Sys_information()
    {
        return $this->hasMany(Sys_information::class);
    }
}
