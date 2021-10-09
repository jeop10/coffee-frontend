<?php

namespace App\Http\Controllers;

use App\CoffeeApi\ApiClient;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function show($product)
    {
        $api_client = new ApiClient();

        $response = json_decode($api_client->getProduct($product));

        if (property_exists($response, 'error')) {
            return redirect()->to('/');
        }

        $data = [
            'product' => $response,
        ];

        return view('detail', $data);
    }
}
