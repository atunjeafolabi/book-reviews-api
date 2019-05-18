<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Rating;
use App\Http\Resources\RatingResource;

class RatingController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth:api');
//    }

    public function store(Request $request, Book $book)
    {
        $rating = Rating::firstOrCreate(
            [
//                'user_id' => $request->user()->id,
                'user_id' => $request->userId,      //userId should be provided in the client request
                'book_id' => $book->id,
            ],
            ['rating' => $request->rating]
        );

        var_dump($rating);
        exit;

//        return new RatingResource($rating);
    }
}
