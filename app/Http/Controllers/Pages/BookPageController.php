<?php

namespace App\Http\Controllers\Pages;

use App\Models\Book;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Resources\BookResource;

class BookPageController
{
    /**
     * Book page
     * @param Book $book
     * @return Response
     */
    public function __invoke(Book $book): Response
    {
        return Inertia::render('book/[id]', [
            'book' => BookResource::make($book)
        ]);
    }
}
