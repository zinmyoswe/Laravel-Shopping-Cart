
<h2>YOU MAY ALSO LIKE</h2>
<ul>
@foreach($mightAlsoLike as $product)
	<li><a href="{{route('shop.show',$product->slug)}}">{{$product->name}}<br>
	${{$product->price}}</a></li>
@endforeach
</ul>

