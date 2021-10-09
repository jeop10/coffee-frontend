@extends('layouts.main')
@section('content')
    <main>
        <div class="row mb-3">
            <div class="col-12 col-md-6">
                <div class="slick">

                    <img src="/img/{{$product->slug}}.png" alt="coffee">
                    <img src="/img/thumbnail.jpg" alt="coffee2">
                    <img src="/img/thumbnail.jpg" alt="coffee3">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="p-2">
                    <h1 class="H2 text-center mb-3">{{$product->name}}</h1>
                    <h2 class="h4 mb-3">${{$product->price}} <small class="small text-muted">Free shipping included</small></h2>
                    <div class="text-start justify-content mb-3">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut
                            aliquip ex ea commodo consequat.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut
                            aliquip ex ea commodo consequat.
                        </p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore
                            et dolore magna aliqua.</p>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <div class="mb-2">
                                Quantity:
                            </div>
                            <div>
                                <select name="" class="form-select" id="">
                                    <option value="1" selected>1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                Size:
                            </div>
                            <div>
                                <select name="" class="form-select" id="">
                                    <option value="s">Small</option>
                                    <option value="m">Medium</option>
                                    <option value="l" selected>Large</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col col-md-6 text-center">
                            <div class="btn btn-outline-primary w-100">
                                Add to cart
                            </div>
                        </div>
                        <div class="col col-md-6 text-center">
                            <div class="btn btn-primary w-100">
                                Buy now
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @include('partials.related-products')
@endsection
