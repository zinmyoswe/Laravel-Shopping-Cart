@extends('layouts.master')

@section('content')
home\Shop
<ul>
@foreach($products as $product)
	<li><a href="{{route('shop.show',$product->slug)}}">{{$product->name}}<br>
	${{$product->price}}</a></li>
@endforeach
</ul>




<br><br>
@include('layouts.footer');
@endsection