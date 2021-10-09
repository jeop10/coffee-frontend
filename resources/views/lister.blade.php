@extends('layouts.main')
@section('content')
    <main>
        <div class="row mb-3 text-center">
            <div class="col col-md-3">
                <form class="text-start"><label for="exampleInputEmail1" class="form-label">Search for a coffee</label>
                    <div class="row align-items-center">
                        <div class="col col-md-8">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp">
                        </div>
                        <div class="col col-md-3">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <div class="row">

                    <div class="col col-md-3">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <img src="/img/pumpkin.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h1 class="card-title h4 pricing-card-title">Pumpkin</h1>
                                <h2 class="h4 mb-4">$12,99</h2>
                                <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-3">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <img src="/img/cappuccino.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h1 class="card-title h4 pricing-card-title">Cappuccino</h1>
                                <h2 class="h4 mb-4">$12,99</h2>
                                <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-3">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <img src="/img/misto.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h1 class="card-title h4 pricing-card-title">Misto</h1>
                                <h2 class="h4 mb-4">$12,99</h2>
                                <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-3">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <img src="/img/latte.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h1 class="card-title h4 pricing-card-title">Latte</h1>
                                <h2 class="h4 mb-4">$12,99</h2>
                                <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-3">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <img src="/img/bagel-2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h1 class="card-title h4 pricing-card-title">Plain Bagel</h1>
                                <h2 class="h4 mb-4">$12,99</h2>
                                <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-3">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <img src="/img/bagel-1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h1 class="card-title h4 pricing-card-title">Cheese, Onion & Garlic Bagel</h1>
                                <h2 class="h4 mb-4">$12,99</h2>
                                <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-3">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <img src="/img/croissant-1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title h4 pricing-card-title">Butter Croissant</h2>
                                <h2 class="h4 mb-4">$12,99</h2>
                                <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-3">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <img src="/img/muffin.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h2 class="card-title h4 pricing-card-title">Blueberry Muffin</h2>
                                <h2 class="h4 mb-4">$12,99</h2>
                                <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>
@endsection
