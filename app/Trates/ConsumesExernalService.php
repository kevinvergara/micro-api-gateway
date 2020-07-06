<?php

namespace App\Trates;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

trait ConsumesExernalService
{

    public function performanRequest($method, $resquestUrl, $formParams = [], $headers = [])
    {
        $cliente = new Client([
            'base_uri' => $this->baseUri,
        ]);

        $response = $cliente->request($method, $resquestUrl, [
            'form_params' => $formParams,
            'headers' => $headers
        ]);

        return $response->getBody()->getContents();
    }

}