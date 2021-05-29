@extends('header')
@section('content')
	<!-- product -->
	<div class="container ">

		

		<h4 class="list-product-title mt-3">Danh Sách tìm kiếm</h4>
			<div class="row">
                @foreach($sanphamtk as $sptk)
				<div class="col-md-3 col-sm-6 col-lg-3 mb-3">
					<div class="card card-product" style="width:280px;">
						<img src="{{url('public')}}/img/{{$sptk->image}}" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">{{$sptk->tensp}}</h5>
							<p class="card-text">{{$sptk->gia}}</p>
							<a href="#" class="btn btn-primary">Mua</a>
							
						</div>
					</div>
				</div>
				@endforeach

			</div>


		</div>

	</div>
	<!--end product -->
@endsection
