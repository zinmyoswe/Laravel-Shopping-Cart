@extends('layouts.master')

@section('content')
<style type="text/css">
	form {
    float: left;
    margin-top: 0em;
}

 /*text-transform: uppercase;*/
</style>
<div class="container">
home\Cart
<div class="row">
   <div class="col-lg-9 col-sm-6 col-xs-12">

@if(Cart::count() > 0)
	<h2>YOUR BAG <span class="title_cartpage">{{Cart::count()}} ITEMS </span></h2> 

	
	{{-- success error msg start --}}
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
	{{-- success error msg end --}}
	<hr>
	
		<br>
		@foreach(Cart::content() as $item)
		<div class="container cart_item">
			<div class="row">
				<div class="col-lg-2"><img src="{{asset('img/addiasbag.png')}}" class="img_cartpage"></div>
				<div class="col-lg-5" ><a href="{{route('shop.show', $item->model->slug)}}">{{$item->model->name}}</a>
				<p class="cart_p">Color: Black <br>
			       Size: 9.5   <b style="margin-left: 7px;">In Stock</b> <i class="far fa fa-check"></i></p>
			       <p>
					
			       		<form action="" method="POST">
			 		
			 		<button type="submit" class="btn btn-link">Edit</button>
			 	</form>

					<form action="{{route('cart.destroy',$item->rowId)}}" method="POST">
			 		{{csrf_field()}}
			 		{{method_field('DELETE')}}
			 		<button type="submit" class="btn btn-link">Delete</button>
			 	</form>
			       
					<form action="{{route('cart.switchsaveforlater',$item->rowId)}}" method="POST">
			 		{{csrf_field()}}
			 		
			 		<button type="submit" class="btn btn-link">SaveForLater</button>
			 	</form>
			   </p>

				</div>
				<div class="col-lg-2">
					<input type="number" name="" class="form-control" placeholder="1">
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-2">$ {{$item->model->price}}</div>
			</div>
		</div>
		<hr>
		@endforeach
		<div class="row">
			<div class="col-md-10">
				<a href="{{route('shop.index')}}" style="margin-right: 8px">Continue Shopping</a>
				<a href="" class="btn btn-outline-dark">Checkout <i class="fa fa-arrow-right"></i></a>
			</div>
			<div class="col-md-2">
				<p>Subtotal : {{Cart::subtotal()}}</p>
	<p>Tax(13%) : {{Cart::tax()}}</p>
	<p><b>Total: {{Cart::total()}} </b></p>
			</div>
		</div>
	
		
	
@else
	<h3>No items in Cart!</h3>
@endif

@if(Cart::instance('saveforlater')->count() > 0)

<h2>{{Cart::instance('saveforlater')->count()}} items Saved For Later</h2>
@foreach(Cart::instance('saveforlater')->content() as $item)

	<div class="container cart_item">
			<div class="row">
				<div class="col-lg-2"><img src="{{asset('img/addiasbag.png')}}" class="img_cartpage"></div>
				<div class="col-lg-5" ><a href="{{route('shop.show', $item->model->slug)}}">{{$item->model->name}}</a>
				<p class="cart_p">Color: Black <br>
			       Size: 9.5   <b style="margin-left: 7px;">In Stock</b> <i class="far fa fa-check"></i></p>
			       <p>
						<form action="{{route('saveforlater.destroy',$item->rowId)}}" method="POST">
			 		{{csrf_field()}}
			 		{{method_field('DELETE')}}
			 		<button type="submit" class="btn btn-link">Remove</button>
			 	</form>
			
			 	<form action="{{route('saveforlater.switchtocart',$item->rowId)}}" method="POST">
			 		{{csrf_field()}}
			 		
			 		<button type="submit" class="btn btn-link">Move To cart</button>
			 	</form>
			  
			   </p>

				</div>
				<div class="col-lg-2">
					
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-2">$ {{$item->model->price}}</div>
			</div>
		</div>
		<hr>



			 	
@endforeach
@else

<h3>You have no items Saved for Later. </h3>

@endif
		</div> {{-- col-lg-9 col-sm-6 col-xs-12 end --}}
		<div class="col-lg-3 col-sm-6 col-xs-12" style="background-color: lightgrey"></div> {{-- col-lg-3 col-sm-6 col-xs-12 end --}}
	</div>


</div>
<img src="https://assets.adidas.com/images/w_600,h_600,f_auto,q_auto:sensitive,fl_lossy/396c603972dd4882acaba97401399dc8_9366/adidas_NMD_Gym_Sack_Black_DU6812_01_standard.jpg">
@endsection