@extends('welcome')

@section('content')
    <h1>checkout</h1>
    <p>enter your checkout details.</p>
    <form method="POST" action="/submitForm">
        @csrf
        <label for="name">First Name:</label>
        <input type="text" id="fname" name="fname" required>
        <br>

        <label for="name">Last Name:</label>
        <input type="text" id="lname" name="lname" required>
        <br>
        
        <label for="name">Email:</label>
        <input type="text" id="email" name="email" required>
        <br>

        <label for="name">contact number:</label>
        <input type="text" id="number" name="number" required>
        <br>

        <label for="name">Address:</Address></label>
        <textarea  id="address" type="text" id="address" name="address" required></textarea>
        <br>

        <label for="city"> City: </label>
        <select id="city" name="city" required>
            <option value=""> select city</option>
            <option value="ahemdabad"> ahemdabad</option>
            <option value="mumbai"> mumbai</option>
            <option value="rajkot"> rajkot</option>
        </select>
        <br>

        <label for="state"> State: </label>
        <select id="state" name="state" required>
            <option value=""> select state</option>
            <option value="gujarat"> gujarat</option>
            <option value="maharastra"> maharastra</option>
        </select>
        <br>

        <label for="price">price: </label>
        <input type="text" id="price" name="price" required>
        <br>

        <label for="quantity"> Quantity: </label>
        <select id="quantity" name="quantity" required>
            <option value=""> select quantity</option>
            <option value="1"> 1</option>
            <option value="2"> 2</option>
            <option value="3"> 3</option>
            <option value="4"> 4</option>
        </select>
        <br>

        <button type="submit">submit</button>

    </form> 

@endsection