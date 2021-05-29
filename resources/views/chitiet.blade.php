@extends('header')
@section('content')
	<!-- product -->
	<div class="container ">

		<h4 class="list-product-title mt-3">Chi tiết {{$sanpham->tensp}}</h4>

		<div class="product-group">
			<div class="row">
                
				<div class="col-md-6">
					<div  style="width:380px;">
						<img src="{{url('public')}}/img/{{$sanpham->image}}" class="card-img-top" alt="...">
						
					</div>
				</div>
				<div class="col-md-6">
					<div >
						<div class="card-body">
							<h5 class="card-title">{{$sanpham->tensp}}</h5>
							<p class="card-text">{{$sanpham->gia}}VND</p>
							<a href="#" class="btn btn-primary">Mua</a>
							
						</div>
					</div>
				</div>

			</div>


		</div>

	</div>
	<!--end product -->
@endsection