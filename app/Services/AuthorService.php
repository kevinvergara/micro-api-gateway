<?php

namespace App\Services;

use App\Trates\ConsumesExernalService;

class AuthorService
{
    use ConsumesExernalService;

    public $baseUri;

    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
        $this->secret = config('services.authors.secret');
    }

    public function obtenerAutores()
    {
        return $this->performanRequest('GET', '/authors');
    }

    public function createAuthor($data)
    {
        return $this->performanRequest('POST', '/authors', $data);
    }

    public function obtenerAuthor($author)
    {
        return $this->performanRequest('GET', "/authors/{$author}");
    }

    public function editAuthor($data, $author)
    {
        return $this->performanRequest('PUT', "/authors/{$author}", $data);
    }

    public function borrarAuthor($author)
    {
        return $this->performanRequest('DELETE', "/authors/{$author}");
    }
}