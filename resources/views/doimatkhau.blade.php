@extends('header')
@section('content')
	<!-- product -->
	<div class="container ">

		

		<h4 class="text-center" style="margin-top: 100px;">Đổi mật khẩu</h4>
   <form action="" method="post" style="margin-top: 50px;width: 700px;">
   	<input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group row">

    <label for="ExampleInput" class="col-md-4 ">Mật khẩu cũ</label>
    <div class="col-md-8">
      <input type="password" class="form-control" name="password_old" placeholder="nhập mật khẩu cũ">
    </div>
    @if($errors->has('password_old'))
  <div class="alert alert-danger">{{$errors->first('password_old')}}
  </div>
  @endif
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-md-4 ">Mật khẩu mới</label>
    <div class="col-md-8">
      <input type="password" class="form-control" name="password" placeholder="nhập mật khẩu mới">
    </div>
    @if($errors->has('password'))
  <div class="alert alert-danger">{{$errors->first('password')}}
  </div>
  @endif
  </div>
  <div class="form-group row">
    <label  class="col-md-4 ">Nhập lại mật khẩu mới</label>
    <div class="col-md-8">
      <input type="password" class="form-control" name="password_confirm" placeholder="nhập lại mật khẩu">
    </div>
    @if($errors->has('password_confirm'))
  <div class="alert alert-danger">{{$errors->first('password_confirm')}}
  </div>
  @endif
  </div>
  
  <button type="submit" class="btn btn-primary ">Đổi mật khẩu</button>
</form>
	</div>
	<!--end product -->
@endsection
