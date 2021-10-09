@extends('layouts.main')
@section('content')
    <main>
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h1 class="h3">
                    Your order: ABC-234-6739 <span class="badge bg-success">Delivered</span>
                </h1>

                <div class="row mt-4 p-3">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col" class="text-start">Item</th>
                            <th scope="col">Size</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row" class="text-start"><a href="#">Latte</a></th>
                            <td>L</td>
                            <td>1</td>
                            <td>$12,99</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start"><a href="#">Pumpkin</a></th>
                            <td>M</td>
                            <td>2</td>
                            <td>$21,99</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-start"><a href="#">Bagel</a></th>
                            <td>-</td>
                            <td>3</td>
                            <td>$38,97</td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>
@endsection
