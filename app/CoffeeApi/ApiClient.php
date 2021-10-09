<?php

namespace App\CoffeeApi;

use GuzzleHttp\Client;

class ApiClient {

    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'coffee-backend/api',
        ]);
    }

    public function getProducts()
    {
        return $this->client->get('products');
    }

}
