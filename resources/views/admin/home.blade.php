<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADMIN</title>
	<link rel="stylesheet" href="{{url('public')}}/boostrap/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('resources')}}/css/admin.css">
</head>
<body>
	<body>
	

	<nav class="navbar navbar-dark bg-dark">
		<h4 style="color: white;">Admin</h4>
	</nav>
	<div class="row">
		<div class="col-md-3">
			<ul class="list-group">
				<a href="#" class="list-group-item list-group-item-action">Danh sách sản phẩm</a>
				<a href="#" class="list-group-item list-group-item-action">-</a>
				<a href="#" class="list-group-item list-group-item-action">-</a>
				<a href="#" class="list-group-item list-group-item-action disabled">-</a>
			</ul>
		</div>
		<div class="col-md-9">
			<a href="{{route('sanpham.create')}}">
			<button type="button" class="btn btn-lg btn-primary"  style="margin: 18px;">Thêm sản phẩm</button></a>
			<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">tên sản phẩm</th>
      <th scope="col">ảnh</th>
      <th scope="col">giá tiền</th>
      <th scope="col">Quản lý</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($sanpham as  $sp)
  		<tr>
      <th >{{$loop->index+1}}</th>
      <td>{{$sp->tensp}}</td>
      <td><img src="{{url('public')}}/img/{{$sp->image}}" width="80px" alt=""></td>
      <td>{{$sp->gia}}VND</td>
      <td><button>-</button></td>
    </tr>
  	@endforeach
  	
  </tbody>
</table>
		</div>

	</div>
</body>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>