<?php

namespace App\Services;

use App\Trates\ConsumesExernalService;

class BookService
{
    use ConsumesExernalService;

    public $baseUri;

    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
        $this->secret = config('services.books.secret');
    }

    public function obtenerBooks()
    {
        return $this->performanRequest('GET', '/books');
    }

    public function createBook($data)
    {
        return $this->performanRequest('POST', '/books', $data);
    }

    public function obtenerBook($book)
    {
        return $this->performanRequest('GET', "/books/{$book}");
    }

    public function editBook($data, $book)
    {
        return $this->performanRequest('PUT', "/books/{$book}", $data);
    }

    public function borrarBook($book)
    {
        return $this->performanRequest('DELETE', "/books/{$book}");
    }
}