@extends('layouts.master')

@section('content')
cart page
<ul>

@if(session()->has('success_message'))
<div class="alert alert-success">
	{{session()->get('success_message')}}
</div>
@endif

@if(count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

@if(Cart::count() > 0)
	<h5>{{Cart::count()}} items in Shopping Cart</h5>
 <ul>
	@foreach(Cart::content() as $item)
		<li><a href="{{route('shop.show', $item->model->slug)}}">{{$item->model->name}}</a>
			<p>{{$item->model->details}}</p>
			 <p> $ {{$item->model->price}}</p>
			 <p>
			 	<form action="{{route('cart.destroy',$item->rowId)}}" method="POST">
			 		{{csrf_field()}}
			 		{{method_field('DELETE')}}
			 		<button type="submit" class="btn btn-outline-danger">Remove</button>
			 	</form>
			 </p>
		</li>
	@endforeach
	</ul>
	<a href="{{route('shop.index')}}" class="btn btn-outline-dark">Continue Shopping</a>
@else
	<h3>No items in Cart!</h3>
@endif
@endsection