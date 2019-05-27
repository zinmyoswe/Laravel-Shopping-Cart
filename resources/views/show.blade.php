@extends('layouts.master')

@section('content')
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
@endsection