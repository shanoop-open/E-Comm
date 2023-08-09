@extends('master')
@section('content')

<div class="container custom_login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-6 mx-auto">
            <form action="login" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>    
                <div class="form-group mb-3">    
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection