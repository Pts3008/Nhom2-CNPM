<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Binhluan extends Model
{
    protected $table="binhluans";
    public function san_phams(){
    	return $this->belongsTo('App\Models\Sanpham','id_sp','id');
    }
}
