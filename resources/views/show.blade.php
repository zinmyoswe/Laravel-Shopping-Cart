@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-9 col-sm-6 col-xs-12">
			
		</div> {{-- col-lg-9 col-sm-6 col-xs-12 end --}}
		<div class="col-lg-3 col-sm-6 col-xs-12"></div> {{-- col-lg-3 col-sm-6 col-xs-12 end --}}
	</div>
home/shop/{{$product->slug}}
<ul>

	<li><a href="">{{$product->name}}<br>
	${{$product->price}}</a></li>

</ul>

<form action="{{route('cart.store')}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	<input type="hidden" name="id" value="{{$product->id}}">
	<input type="hidden" name="name" value="{{$product->name}}">
	<input type="hidden" name="price" value="{{$product->price}}">
	<button type="submit" class="btn btn-outline-dark">Add to Cart</button>
</form>
<br><br>afsad
@include('might-like');
</div> {{-- container end --}}
@endsection