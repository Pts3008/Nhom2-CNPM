<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sanphams;

class AdminController extends Controller
{
    public function home(){
    	$sanpham= SanPhams::all();
    	return view('admin.home',compact('sanpham'));
    }
}
