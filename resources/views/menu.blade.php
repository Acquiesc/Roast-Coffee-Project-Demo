@extends ('layouts.standard')

@section('content')

@include('inc.disclaimer')

<!--Store Header-->
<section class="container-fluid p-0 bg-image text-center text-white" style="background-image: url('images/hero-coffee.webp'); background-position: center; height: 25vh; margin-top: 56px;">
    <div class="d-flex w-100 h-100 mask justify-content-center align-items-center" style="background-color: rgba(0,0,0,.6)">
        <div class="row">
            <div class="col">
                <h1>Roast Coffee Shop</h1>
                <br><br><br>
                <h1>Menu</h1>
            </div>
        </div>
    </div>
</section>

<!--Filters-->
<section class = "container-fluid p-3 px-5 bg-light">
    <div class="row justify-content-center">
        <div class="col-auto">
            <a role="button">All Products</a>
        </div>
        <div class="col-auto">
            <a role="button">Coffee</a>
        </div>
        <div class="col-auto">
            <a role="button">Eats</a>
        </div>
        <div class="col-auto">
            <a role="button">Tea</a>
        </div>
    </div>
</section>

<!--Store Display-->
<section class="container mt-5">
    <div id="products-container" class="row align-items-center">
        @foreach($products as $product)
        <div class="col-auto mb-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" width="18rem;" height="250px;" src="/images/{{$product->img_name}}" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection