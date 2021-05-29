<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADMIN</title>
	<link rel="stylesheet" href="{{url('public')}}/boostrap/bootstrap.min.css">
	
</head>
<body>
	

	<nav class="navbar navbar-dark bg-dark">
		<h4 style="color: white;">Admin</h4>
	</nav>
	<h3 style="margin: 30px;">Thêm sản Phẩm</h3>
  <div class="container">
<form action="{{route('sanpham.store')}}" method="post">
  <input type="hidden" name="_token" value="{{csrf_token()}}">

  <div class="form-group row">
    <label for="colFormLabelSm" class="col-md-4">Tên sản phẩm</label>
    <div class="col-md-8">
      <input type="text" class="form-control form-control-sm" name="tensp" >
    </div>
  </div>
  
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-md-4">Link ảnh</label>
    <div class="col-md-8">
      <input type="text" class="form-control form-control-sm" name="image">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-md-4">Giá sản phẩm</label>
    <div class="col-md-8">
      <input type="text" class="form-control form-control-sm" name="gia">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="colFormLabelSm" class="col-md-4">Số lượng sản phẩm</label>
    <div class="col-md-8">
      <input type="text" class="form-control form-control-sm" name="soluong">
    </div>
  </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
  
  </form>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>