<?php

namespace App;
// use Illuminate\Support\Facades\Session;
class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct(){
		$this->items = session('cart') ? session('cart') : [];
		$this->totalQty = $this->getTotalQty();
		$this->totalPrice = $this->getTotalPrice();

	}

	public function add($item, $qtt){
		if (isset($this->items[$item->id])) {
			$this->items[$item->id]['soluong'] = $qtt;//+=$qtt
			
		}else{
			$cart_item = [
				'id' => $item->id, 
				'tensp' => $item->tensp,  
				'gia' => $item->gia, 
				'image' => $item->image, 
				'soluong' => $qtt
			];

			$this->items[$item->id] = $cart_item;
		}
		// dd(session('procart'));
		session(['cart'=> $this->items]); 

	}
	public function add2($item, $qtt){
		if (isset($this->items[$item->id])) {
			$this->items[$item->id]['soluong'] += $qtt;//+=$qtt
			
		}else{
			$cart_item = [
				'id' => $item->id, 
				'tensp' => $item->tensp,  
				'gia' => $item->gia, 
				'image' => $item->image, 
				'soluong' => $qtt
			];

			$this->items[$item->id] = $cart_item;
		}
		 
		session(['cart'=> $this->items]); 

	}

	//xóa 1
	public function reduceByOne($id){
		if (isset($this->items[$id])) {
			// dd($item);
			unset($this->items[$id]);
			session(['cart'=> $this->items]); 
		}
	}

	// //xóa nhiều
	public function removeItem($id){
		session(['cart'=> null]); 
	}

	public function getTotalQty(){
		$total = 0;
		foreach ($this->items as $key => $item) {
			$total += $item['soluong'];
		}
		return $total;
	}
	public function getTotalPrice(){
		$total = 0;
		foreach ($this->items as $key => $item) {
			//dd($item);
			$total += $item['soluong']*$item['gia'];
		}

		return $total;
	}

	public function getPriceById($id){
		$total = 0;
		if (isset($this->items[$id])) {
			$total = $this->items[$id]['soluong']*$this->items[$id]['gia'];
		}
		//dd($total);
		return $total;
	}
}
