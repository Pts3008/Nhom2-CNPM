<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SanPhams;
use App\User;
use Hash;
use Auth;
use Sentinel;
use Reminder;
use Mail;
use App\Cart;
use App\DonHangs;

use App\Http\Requests\RequestPassword;
class HomeController extends Controller
{
    public function index(){
    	$sanpham= SanPhams::all();
    	return view('index',compact('sanpham'));
    }
    public function chitiet(Request $req){
    	$sanpham= SanPhams::where('id',$req->id)->first();
    	return view('chitiet',compact('sanpham'));
    }
    public function timkiem(Request $req){
    	$sanphamtk= SanPhams::where('tensp','like','%'.$req->key.'%')->get();
    	return view('timkiem',compact('sanphamtk'));
    }
    public function dangnhap(){
    	
    	return view('dangnhap');
    }
    public function dangki(){
    	
    	return view('dangki');
    }
     public function postdangki(Request $req){
    	
    	$this->validate($req,[
              'email'=>'required|email|unique:users,email',
              'password'=>'required|min:6|max:20',
              'name'=>'required'
    	],[
               'email.required'=>'nhập email !',
               'email.email'=>'nhập sai định dạng email !',
               'email.unique'=>'email đã có người sử dụng !',
               'password.required'=>'nhập mật khẩu !',
               'name.required'=>'nhập tên !',
               'password.min'=>'mật khẩu ít nhất 6 kí tự !',
               
    	]);
    	$user=new User();
    	$user->name=$req->name;
    	$user->email=$req->email;
    	$user->password=Hash::make($req->password);
    	$user->save();
    	return redirect()->back()->with('thanhcong','tạo thành công');
    }
    public function postdangnhap(Request $req){
           $this->validate($req,[
           'email'=>'required|email',
           'password'=>'required|min:6|max:20',
           ],[
            'email.required'=>'nhaapj email',
            'email.email'=>'email sai',
            'password.required'=>'nhập mật khẩu !',
            'password.min'=>'mật khẩu ít nhất 6 kí tự !'
           ]);
           $credentials=array('email'=>$req ->email,'password'=>$req->password);
           if(Auth::attempt($credentials)){
           	return redirect()->back()->with(['plag'=>'success','thongbao'=>'dang nhap thành công']);
           }else{
           	return redirect()->back()->with(['plag'=>'danger','thongbao'=>'dang nhap khong thành công']);
           }
    }
    public function dangxuat(){
    	Auth::logout();
    	return redirect()->route('index');
    }
    public function doimatkhau(){
      
      return view('doimatkhau');
    }
    public function postdoimatkhau(RequestPassword $req){
      $user = Auth::user();
      if(Hash::check($req -> password_old,$user->password)){
        $user->password=bcrypt($req->password);
        $user->save();

        return redirect()->back()->with('success','cap nhật thaanhf công');
      }
      return redirect()->back()->with('danger','Mật khẩu cũ không đung');
    }
    public function quenmk(){
      return view('quenmk');
    }
    public function Sencoderesetpassword(Request $req){
      $email=$req->email;

      $checkuser=User::where('email',$email)->first();

      if(!$checkuser){
        return redirect()->back()->with('danger','email không tồn tại');
      }
      
    }
    public function sendMail($user,$code){
      Mail::send('email.forgot',['user'=>$user,'code'=>$code],
        function($message)use ($user){
          $message->to($user->email);
          $message->subject("$user->name,resetyourpassword");
        });
    }
   
  public function cart()
  {
    

    return view('giohang');

  }
  public function cart_detail(Request $req,$id)
  {
    $product = SanPhams::find($id);
    dd($product);
        $cart = new Cart();

        $qtt = ($req->soluong) ? $req->soluong : 1;
        
        $cart->add2($product, $qtt);
        dd($cart);
    return view('giohang',compact('product','cart','qtt'));

  }




      public function getAddtoCart2(Request $req,$id){
        $product = SanPhams::find($id);
       // dd($product);
        $cart = new Cart();
        $qtt = ($req->quantity) ? $req->quantity : 1;
        
        // dd($qtt);
        $cart->add2($product, $qtt);
       // dd(session('procart'));
        return redirect()->back();
    }
    public function getAddtoCart(Request $req,$id)
    {
        $product = Product::find($id);
        $cart = new Cart();
        $qtt = ($req->soluong) ? $req->soluong : 1;
        
        $cart->add($product, $qtt);
        
          $total = ($cart->items[$product->id]['soluong'])*$product->gia;
        

         dd($total);
        return response($total, 200);
    }
    public function ship()
  {
    
        $order = DonHangs::all();
    return view('order',compact('order'));

  }
    public function getAdd(Request $req,$id){
        $product = Product::find($id);
        $cart = new Cart();
        $qtt = ($req->quantity) ? $req->quantity : 1;
        
        $cart->add2($product, $qtt);

       
        return  redirect('ship');
    }

    public function getDeletetoCart(Request $req,$id){
        
        $cart = new Cart();
        $qtt = ($req->soluong) ? $req->soluong : 1;
        
        $cart->reduceByOne($id);
        return redirect()->back();
    }
    public function getDeletealltoCart(Request $req,$id){
        
        $cart = new Cart();
        $qtt = ($req->soluong) ? $req->soluong : 1;
        
        $cart->removeItem($id);
        return redirect()->back();
    }
}
