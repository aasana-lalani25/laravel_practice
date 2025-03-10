<h2> Products</h2>
<a href="{{route('products.create')}}"> Add Product </a>

<table border="2" cellpadding="8">
    <thead>
        <tr>
            <th>Name:</th>
            <th> Description:</th>
            <th> Price:</th>
    
    
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
    </tr>
    @endforeach
    </tbody>
</table>