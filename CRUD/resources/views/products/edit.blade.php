<h2> Edit details </h2>
<form action="{{route('products.update',$product->id)}}" method="POST">
    @csrf
    @method('PUT')
    
    <label for="name">Name: </label>
    <input type="text" name="name"  value="{{$product->name}}">
    <br>

    <label for="description">Description: </label>
    <textarea  name="description" > {{$product->description}}</textarea>
    <br>
   
    <label for="price">Price: </label>
    <input type="text" name="price" value="{{$product->price}}">
    <br>
 
    <button type="submit">Edit Product</button>
    <br>

</form>
