@extends('layouts.main')
@section('content')
    <main>

        <div class="row row-cols-1 row-cols-md-4 mb-3 text-center">
            @foreach($best_selling as $product)
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <a href="/products/{{$product->slug}}">
                            <img src="/img/{{$product->slug}}.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="/products/{{$product->slug}}" class="card-title h3 pricing-card-title text-dark text-decoration-none">{{$product->name}}</a>
                            <h2 class="h4 my-4">${{$product->price}}</h2>
                            <a href="/cart-detail" class="w-100 btn btn-lg btn-outline-primary">
                                Add to cart
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col text-end">
                <a href="/all" class="text-dark text-decoration-none">
                    View All
                </a>
            </div>
        </div>
    </main>
@endsection
