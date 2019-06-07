@extends('layouts.master')

@section('content')

<style type="text/css">
	.shop{
		width: 233px;
		height: 360px;
		/*background: yellow;*/
		font-size: 14px;
		margin-bottom:3px;
	}
	.shop_img{
		width: 233px;

	}
	.shop a{
		color: #000;
	}
</style>
<div class="container">
	home\Shop
	<div class="row">
		<div class="col-md-2">
			Side bar
		</div>
		<div class="col-md-10">	
			<div class="row">
				@foreach($products as $product)
				<div class="col-lg-3">	
					<div class="shop">

					<img src="{{asset('/img/'.$product->photo)}}" class="shop_img">
					<br><br>
	<a href="{{route('shop.show',$product->slug)}}">{{$product->name}}</a>
	<br>
	${{$product->price}}

	<br><br>
	<p style="color: grey; font-size: 12px;">9 colors</p>

	</div>
				</div>
				@endforeach
			</div>
		


		</div>
	</div>
</div>




<br><br>
@include('layouts.footer');
@endsection