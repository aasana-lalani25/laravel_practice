@extends('welcome')

@section('content')
    <h1> thank you for submiting form</h1>
    <p> first name:{{ $fname}}  </p>
    <p> last name:{{ $lname}}  </p>
    <p> email:{{ $email}}  </p>
    <p> address:{{ $address}}  </p>
    <p> city:{{ $city}}  </p>
    <p> state:{{ $state}}  </p>
    <p> price:{{ $price}}  </p>
    <p> quantity:{{ $quantity}}  </p>
    
    <a href="{{url('/')}}">go back to the form </a>

@endsection