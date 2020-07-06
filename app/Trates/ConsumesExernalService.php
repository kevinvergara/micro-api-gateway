<?php

namespace App\Trates;

use GuzzleHttp\Client;

trait ConsumesExernalService
{

    public function performanRequest($method, $resquestUrl, $formParams = [], $headers = [])
    {
        $cliente = new Client([
            'base_uri' => $this->baseUri,
        ]);

        if(isset($this->secret)){
            $headers["Authorization"] = $this->secret;
        }

        $response = $cliente->request($method, $resquestUrl, [
            'form_params' => $formParams,
            'headers' => $headers
        ]);

        return $response->getBody()->getContents();
    }

}