<h2> Products</h2>
<a href="{{route('products.create')}}"> Add Product </a>

<table border="2" cellpadding="8">
    <thead>
        <tr>
            <th>Name:</th>
            <th> Description:</th>
            <th> Price:</th>
            <th> Actions: </th>
    
    
        </tr>
    </thead>

    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td> 
                <a href="{{route('products.show',$product->id)}}">View</a>
                <a href="{{route('products.edit',$product->id)}}">Edit</a>

                <form action="{{route('products.destroy' , $product->id)}}" method="POST">
                    @csrf  
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('are you sure you want delete this product?')">Delete </button>
</form>
</td>
    </tr>
    @endforeach
    </tbody>
</table>