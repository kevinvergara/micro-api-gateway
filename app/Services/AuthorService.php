<?php

namespace App\Services;

use App\Trates\ConsumesExernalService;
use Illuminate\Support\Facades\Log;

class AuthorService
{
    use ConsumesExernalService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
    }

    public function obtenerAutores()
    {
        return $this->performanRequest('GET', '/authors');
    }

    public function createAuthor($data)
    {
        return $this->performanRequest('POST', '/authors', $data);
    }
}