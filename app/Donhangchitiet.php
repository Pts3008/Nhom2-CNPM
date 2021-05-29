<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donhangchitiet extends Model
{
    protected $table="donhangchitiets";

    public function san_phams(){
    	return $this->belongsTo('App\Models\Donhangchitiets','id_sp','id');
    }
    public function donhangs(){
    	return $this->belongsTo('App\Models\Donhangs','id_dh','id_dh');
    }
}
