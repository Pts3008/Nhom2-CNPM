@extends('header')
@section('content')
	<!-- product -->
	<div class="container ">

		<h4 class="list-product-title mt-3">Danh Sách Sản Phẩm</h4>

		<div class="product-group">
			<div class="row">
                @foreach($sanpham as $sp)
				<div class="col-md-3 col-sm-6 col-lg-3 mb-3">
					<div class="card card-product" style="width:280px;">
						<img src="{{url('public')}}/img/{{$sp->image}}" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">{{$sp->tensp}}</h5>
							<p class="card-text">{{$sp->gia}}</p>
							<!-- //<a href="#" class="btn btn-primary">Mua</a> -->
							<a href="{{route('chitiet',$sp->id)}}" class="btn btn-success">Chi tiết</a>
							<a href="{{route('themgiohang2',$sp->id)}}" class="btn btn-primary">Add to cart</a>
						</div>
					</div>
				</div>
				@endforeach

			</div>


		</div>

	</div>
	<!--end product -->
@endsection
