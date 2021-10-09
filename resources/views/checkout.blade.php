@extends('layouts.main')
@section('content')
    <main>
        <div class="row mb-3">
            <div class="col-12 col-md-9">
                <div class="card p-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <h3>Shipping Address</h3>
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Name</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Last name</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Address</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Zipcode</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">State</label>
                                        <div class="col-6">
                                            <select class="form-select" name="" id="">
                                                <option value="">Select a State</option>
                                                <option value="">Select a State</option>
                                                <option value="">Select a State</option>
                                                <option value="">Select a State</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                            else.
                                        </div>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">It's the same as billing
                                            address</label>
                                    </div>
                                </form>
                            </div>
                            <div class="col-6">
                                <h3>Billing Address</h3>
                                <form>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Name</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Last name</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Address</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Zipcode</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">State</label>
                                        <div class="col-6">
                                            <select class="form-select" name="" id="">
                                                <option value="">Select a State</option>
                                                <option value="">Select a State</option>
                                                <option value="">Select a State</option>
                                                <option value="">Select a State</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <div class="col-6">
                                            <input type="text" class="form-control col-4" id="exampleInputPassword1">
                                        </div>
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone
                                            else.
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col align-self-center">
                                <button type="submit" class="btn btn-success">Proceed to payment platform</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card p-3">
                    <div class="row mb-2">
                        <div class="col">1 Latte</div>
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
@endsection
