<h2> Add Products </h2>
<form action="{{route('products.store')}}" method="POST">
    @csrf
    
    <label for="name">Name: </label>
    <input type="text" name="name" id="name" required>
    <br>
    

    <label for="description">Description: </label>
    <textarea  name="description"  required> </textarea>
    <br>
   
 
    <label for="price">Price: </label>
    <input type="text" name="price" id="price" required>
    <br>

 
    <button type="submit">Add Product</button>
    <br>

</form>
