@extends('welcome')

@section('content')
    <h1>shop here</h1>
    <p>choose your products.</p>
    <div class="product-card">
        <img src="{{asset('images/product1.jpeg') }}" alt="Product1">
        <h3> Product 1</h3>
        <p> Price : 2000 </p>
        <button> Buy now </button>
    </div>

    <div class="product-card">
        <img src="{{asset('images/product2.jpeg') }}" alt="Product2">
        <h3> Product 2</h3>
        <p> Price : 30000 </p>
        <button> Buy now </button>
    </div>

    <div class="product-card">
        <img src="{{asset('images/product3.jpeg') }}" alt="Product3">
        <h3> Product 3</h3>
        <p> Price : 34000 </p>
        <button> Buy now </button>
    </div>
@endsection