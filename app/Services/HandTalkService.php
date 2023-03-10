<?php

namespace App\Services;

use GuzzleHttp\Client;

class HandTalkService
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function translateToLibras($text)
    {
        $client = new Client([
            'base_uri' => 'https://api.handtalk.me/translate/v1/',
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json'
            ]
        ]);

        $response = $client->request('POST', 'text/', [
            'json' => [
                'text' => $text
            ]
        ]);

        $data = json_decode($response->getBody()->getContents());

        return $data->translation;
    }
}