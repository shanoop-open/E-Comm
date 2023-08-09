@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img style="height: 400px" src="{{$product->gallary}}" alt="[product image]">
        </div>
        <div class="col-sm-6 details-sec">
            <a href="/"> Go Back</a>
            <h2>{{$product->name}}</h2>
            <h3>Price:{{$product->price}}</h3>
            <h4>Details:{{$product->description}}</h4>
            <br><br>
            <form action="/edit-cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <button class="btn btn-primary">Add To Cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy</button>
        </div>
    </div>
</div>

@endsection