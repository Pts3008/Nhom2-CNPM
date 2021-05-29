<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Freshfruit</title>
	<link rel="stylesheet" href="{{url('public')}}/boostrap/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('resources')}}/css/main.css">
</head>
<body>
	<div class="container ">
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container">
				<img src="{{url('public')}}/img/bg.png" alt="">

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="{{route('index')}}">Trang Chủ <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('index')}}">Sản Phẩm</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Khuyến Mại</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Giới Thiệu</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Liên Hệ</a>
						</li>
					</ul>

					<form class="form-inline my-2 my-lg-0" action="{{route('timkiem')}}">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" name="key" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#"></a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="{{route('cart')}}" id="navbarDropdown" role="button"  aria-haspopup="true" aria-expanded="false">
								<span ><svg xmlns="http://www.w3.org/2000/svg" width="30" height="26" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
									<path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
									<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
								</svg></span>
							</a>

						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="26" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
									<path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
								</svg></span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								@if(Auth::check())
								<a class="dropdown-item" href="">{{Auth::user()->name}}</a>
								<a class="dropdown-item" href="{{route('doimatkhau')}}">đổi mật khẩu</a>
								<a class="dropdown-item" href="{{route('dangxuat')}}">đăng xuất</a>
								@else()
								<a class="dropdown-item" href="{{route('dangnhap')}}">đăng nhập</a>
								<a class="dropdown-item" href="{{route('dangki')}}">đăng ký</a>
								@endif
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>



	</div>
	<div class="container">
		<div class="row" style="margin-top: 200px;">  
			<div class="col-md-3">
				<h4>tổng tiền:</h4>

				<a href="{{route('ship')}}"><button type="button" class="btn btn-primary">Mua</button></a>

			</div>
			<div class="col-md-9">
				<table class="table">
					<thead>
						<tr>

							<th scope="col">tên sản phẩm</th>
							<th scope="col">ảnh</th>
							<th scope="col">giá tiền</th>
							<th scope="col">số lượng</th>
							<th scope="col">Thanh tien</th>

						</tr>
					</thead>
					<tbody>





						@if(count($cart->items))
						@foreach($cart->items as $product)

						<tr>
							<td class="cart-title first-row">
								<h5>{{$product['tensp']}}</h5>
							</td>
							<td class="text-center" ><img src="{{url('public')}}/img/{{$product['image']}}" class="img-responsive " alt="Image" style="width: 70px;"></td>
							
							<td class="first-row">${{$product['gia']}} </td>
							<td class="first-row">{{$product['soluong']}} </td>
							<td class="total-price first-row">
								<span >${{$cart->getPriceById($product['id'])}} </span>
							</td>
							
							<td class="close-td"><a style="color: black;" href="{{route('xoagiohang',($product['id']))}}"><span >xoa</span></a>
							</td>
							
							
						</tr>
						@endforeach
						<td class="close-td"><a style="color: black;" href="{{route('xoahetgiohang',($product['id']))}}"><span >xoa all</span></a>
							</td>
							<td>Tong tien: ${{number_format($cart->totalPrice)}} </td>
						@endif




					</tbody>
				</table>


			</div>



		</div>

	</div>

</body>
<script type="text/javascript" src="{{url('public')}}/boostrap/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>