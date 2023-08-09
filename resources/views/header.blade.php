
@php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::countCart();

}
@endphp

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">Shopify</a>
    </div>
    @if (Session::has('user'))
    <ul class="nav navbar-nav">
      <li><a href="#">Orders</a></li>
    </ul>        
    @endif
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-primary button" type="submit" >
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
  
    @if (Session::has('user'))
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/cart-list">Cart({{$total}})</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">Logout</a></li>
        </ul>
      </li>
    </ul>

    @else
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    @endif
  </div>
</nav>


