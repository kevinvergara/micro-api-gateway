<?php

namespace App\Services;

use App\Trates\ConsumesExernalService;

class BookService
{
    use ConsumesExernalService;

    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
    }
}