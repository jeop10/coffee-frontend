@extends('layouts.main')
@section('content')
    <main>
        <div class="row row-cols-1 row-cols-md-4 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <img src="/img/pumpkin.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="/coffee/cortado" class="card-title h2 pricing-card-title text-dark text-decoration-none">Pumpkin</a>
                        <h2 class="h4 mb-4">$12,99</h2>
                        <a href="/cart-detail" class="w-100 btn btn-lg btn-outline-primary">
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <img src="/img/cappuccino.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <a href="/coffee/cortado"class="card-title h2 pricing-card-title text-dark text-decoration-none">Cappuccino</a>
                        <h2 class="h4 mb-4">$12,99</h2>
                        <a href="/cart-detail" class="w-100 btn btn-lg btn-outline-primary">
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <img src="/img/misto.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <a href="/coffee/cortado" class="card-title h2 pricing-card-title text-dark text-decoration-none">Misto</a>
                        <h2 class="h4 mb-4">$12,99</h2>
                        <a href="/cart-detail" class="w-100 btn btn-lg btn-outline-primary">
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <img src="/img/latte.png" class="card-img-top" alt="...">
                    <div class="card-body">
                    <a href="/coffee/cortado" class="card-title h2 pricing-card-title text-dark text-decoration-none">Latte</a>
                        <h2 class="h4 mb-4">$12,99</h2>
                        <a href="/cart-detail" class="w-100 btn btn-lg btn-outline-primary">
                            Add to cart
                        </a>
                    </div>
                </div>
            </div>
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
