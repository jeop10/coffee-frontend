<?php

namespace App\CoffeeApi;

use GuzzleHttp\Client;

class ApiClient {

    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'coffee-backend/api/',
        ]);
    }

    public function getAllProducts()
    {
        $response = $this->client->get('products');

        return $response->getBody();
    }

    public function getBestSelling()
    {
        $response = $this->client->get('products/best-selling');

        return $response->getBody();
    }

    public function getProduct($product)
    {
        $response = $this->client->get('products/'.$product);

        return $response->getBody();
    }

}
