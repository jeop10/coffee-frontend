@extends('layouts.main')
@section('content')
    <main>
        <div class="row mb-3">
            <div class="col-12 col-md-9">
                <div class="card p-3">
                    <h3 class="card-title">Your Coffee</h3>
                    <div class="card-body">
                        <div class="row align-items-center text-center">
                            <div class="col"><img src="/img/pumpkin.png" class="img-thumbnail" alt="image"></div>
                            <div class="col flex-column text-start align-items-center ">
                                <div class="mb-2">
                                    Pumpkin
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div>Quantity</div>
                                    <div class="col4">
                                        <select name="" class="form-select form-select-sm" id="">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>Size</div>
                                    <div class="col-4">
                                        <select class="form-select form-select-sm" id="">
                                            <option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l" selected>L</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    $12,99
                                </div>
                            </div>
                            <div class="col text-center d-flex justify-content-between align-items-center  ">

                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card p-3">
                    <div class="row mb-2">
                        <div class="col">1 tem</div>
                        <div class="col text-end">$12,99</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col">Shipping</div>
                        <div class="col text-end">Free</div>
                    </div>
                    <div class="row border-top mt-2 py-2" style="background-color: lightgray">
                        <div class="col fw-bold">Total</div>
                        <div class="col fw-bold text-end ">$12,99</div>
                    </div>
                    <div class="row mt-2">
                        <button type="button" class="btn btn-primary">
                            Proceed to checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="pt-4 my-md-5 pt-md-5 text-center" style="border-top: 1px dashed lightgray">
        <h3 class="h4 fw-normal">If you want something more</h3>
        <p class="fs-5 text-muted">
            This are our recommendations.
        </p>

        <div class="row row-cols-1 row-cols-md-4 mb-3">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <img src="/img/muffin.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h1 class="card-title h4 pricing-card-title">Blueberry Muffin</h1>
                        <h2 class="h4 mb-4">$12,99</h2>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
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
            <div class="col">
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
            <div class="col">
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
        </div>
    </section>
@endsection
