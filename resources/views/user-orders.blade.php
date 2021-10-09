@extends('layouts.main')
@section('content')
    <main>
        <div class="row mb-3">
            <div class="col-12 text-center">
                <h1 class="h3">
                    Your orders
                </h1>

                <div class="row mt-4 p-3">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Order #</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">Sep 01, 2021</th>
                            <td><a href="#">ABC-123-4567</a></td>
                            <td><span class="badge bg-warning text-dark">In Route</span></td>
                        </tr>
                        <tr>
                            <th scope="row">Aug 01, 2021</th>
                            <td><a href="#">ABC-234-6739</a></td>
                            <td class="fw-bold text-success"><span class="badge bg-success">Delivered</span></td>
                        </tr>
                        <tr>
                            <th scope="row">Jul 01, 2021</th>
                            <td><a href="#">ABC-456-4578</a></td>
                            <td class="fw-bold text-success"><span class="badge bg-success">Delivered</span></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>
@endsection
