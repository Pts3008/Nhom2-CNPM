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
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
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
				
				<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="26" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
</svg></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('dangnhap')}}">đăng nhập</a>
          
         
        </div>
      </li>			
				
			</div>
		</div>
	</nav>

	</div>
	
	<!-- end menu -->
	
<div class="container">
	
	<h4 class="text-center" style="margin-top: 100px;">Lấy lại mật khẩu</h4>
   <form action="{{route('quenmk')}}" method="post" style="margin-top: 50px;width: 700px;">
   	<input type="hidden" name="_token" value="{{csrf_token()}}">
    
  <div class="form-group row">
    <label  class="col-md-6 ">nhập email muốn lấy lại mật khẩu</label>
    <div class="col-md-6">
      <input type="email" class="form-control" name="email" placeholder="" >
      @if($errors->has('email'))
  <div class="alert alert-danger">{{$errors->first('email')}}
  </div>
  @endif
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary ">gửi</button>
</form>
    </div>

	
</body>
<script type="text/javascript" src="{{url('public')}}/boostrap/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
