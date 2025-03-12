<h2> {{$product->name}} </h2>
<p> <strong> Description:</strong> {{$product->description}}</p>
<p> <strong> Price: </strong> {{$product->price}} </p>

<a href="{{route('products.index')}}">Back</a>
