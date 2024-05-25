<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    use HasFactory;
    protected $fillable=["id","Nom","pdf","id_switche","id_sys_info","id_citrix_info","id_serveur"];
    public function sys_info()
    {
        return $this->belongsTo(Sys_information::class,"id_sys_info");
    }
    public function citrix_info()
    {
        return $this->belongsTo(Citrix_information::class,"id_citrix_info");
    }
    public function switche()
    {
        return $this->belongsTo(switche::class,"id_switche");
    }
    public function serveur()
    {
        return $this->belongsTo(serveur::class,"id_serveur");
    }
}
