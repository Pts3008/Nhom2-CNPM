<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPhams extends Model
{
    //
    protected $table="san_phams";

    protected $primaryKey = "id";
    protected $fillable = ['tensp','image','gia','soluong'];

   // public function donhangchitiets(){
    // 	return $this->hasMany('App\Models\Donhangchitiets','id_sp','id_dh');
    // }
    // public function binhluans(){
    // 	return $this->hasMany('App\Models\Binhluan','id_sp','id_bl');
    // }
}
