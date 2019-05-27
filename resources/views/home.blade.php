@extends('layouts.master')

@section('content')
home page
<ul>
@foreach($products as $product)
	<li><a href="">{{$product->name}}<br>
	${{$product->price}}</a></li>
@endforeach
</ul>

@endsection