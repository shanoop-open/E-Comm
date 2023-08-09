@extends('master')
@section('content')
    <div class="custom-product">
        <div>
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>Results for Products</h4>
                @foreach ($products as $item)
                    <div class="row searched-item">
                        <div class="col-sm-3">
                            <a href="details/{{$item->id}}">
                                <img class="trending-img" src="{{$item->gallary}}">
                            </a>
                        </div>
                        <div class="col-sm-4">
                        <div >
                            <h2>{{$item->name}}</h2>
                            <h4>${{$item->price}}</h4>
                        </div>
                    </div>
                        <div class="col-sm-3">
                            <a href="remove-from-cart/{{$item->cartId}}"><button class="btn btn-warning">Remove from Cart</button></a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <br><br><br><br><br>
        <a class="btn btn-success" href="order-now">Order Now</a>
    </div>

@endsection