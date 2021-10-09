<?php

namespace App\Http\Controllers;

use App\CoffeeApi\ApiClient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        $api_client = new ApiClient();

        $data = [
            'best_selling' => json_decode($api_client->getBestSelling()),
        ];

        return view('index', $data);
    }
}
