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
		<!-- menu -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
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
				
							
				
			</div>
		</div>
	</nav>

	</div>
	
	<!-- end menu -->
	
<div class="container">
	<h4 style="margin-top: 100px;">Đăng nhập</h4>
	@if(Session::has('plag'))
	<div class="alert alert-{{Session::get('plag')}}">
		
     {{Session::get('thongbao')}}
	</div>
	@endif
   <form action="{{route('pdangnhap')}}" style="margin-top: 50px;width: 700px;">
   	
   	<div class="space20">&nbsp</div>
  <div class="form-group row">
    <label for="staticEmail" class="col-md-4 ">Tên đăng nhập</label>
    <div class="col-md-8">
      <input type="email" class="form-control" name="email" placeholder="nhập email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-md-4 ">Mật khẩu</label>
    <div class="col-md-8">
      <input type="password" class="form-control" name="password" placeholder="nhập mật khẩu">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Đăng Nhập</button>
</form>

    </div>

	

</body>
<script type="text/javascript" src="{{url('public')}}/boostrap/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
