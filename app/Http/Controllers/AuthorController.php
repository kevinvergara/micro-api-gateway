<?php

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Trates\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponse;
    
    public $authorService;

    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index()
    {
        return $this->successResponse($this->authorService->obtenerAutores());
    }

    public function store(Request $request)
    {
        return $this->successResponse(
            $this->authorService->createAuthor($request->all()),
            Response::HTTP_CREATED
        );
    }

    public function show($author)
    {
        
    }

    public function update(Request $request, $author)
    {
        
    }

    public function destroy($author)
    {
        
    }
}
