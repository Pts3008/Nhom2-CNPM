<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonHangs;
use Auth;

class ControllerOrder extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('thanhcong');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $order = DonHangs::all();
        return view('order',compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if(Auth::check()){
        $order = Order::create([
           'id_user'=>Auth::user()->id,
           'tendh'=>$request->name,
           'noidung'=>$request->noidung,
           'phone'=>$request->phone,
           'diachi'=>$request->address,
          
        ]);

        // $order_detail = session('cart');

        // foreach ($order_detail as $value) { 
        //     $amount = ($value['price'])*($value['quantity']); 
        //     // dd($total);
        //     $ds_order = Order_detail::create([
        //        'id_product'=>$value['id_product'],
        //        'id_order'=>$order->id_order,
        //        'quantity'=>$value['quantity'],
        //        'price'=>$value['price'],
        //        'amount'=>$amount,
            
        //     ]); 
        //      session(['procart'=> null]);
        return view('thanhcong');
        }
        
        else{
            return redirect()->route('order.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
