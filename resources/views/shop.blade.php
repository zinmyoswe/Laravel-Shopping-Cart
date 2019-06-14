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
	ul li a{
		list-style: none;
		color: #000;
	}

	ul li{
		list-style: none;
	}
</style>
<div class="container">
	home /Shop
	<div class="row">
		<div class="col-md-2">
			<h5>SHOP BY CATEGORY</h5>
			<ul>
			@foreach($categories as $category)
				<li><a href="{{route('shop.index',['category'=>$category->slug])}}">{{$category->name}}</a></li>
			@endforeach
			</ul>
		</div>
		<div class="col-md-10">	
			<h4 style="font-weight: bold">{{$categoryName}}</h4><br>
			<div class="row">

				@forelse($products as $product)
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
				@empty
				@include('notfound');
					
				@endforelse
			</div>
		


		</div>
	</div>
</div>




<br><br>
@include('layouts.footer');
@endsection