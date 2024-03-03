<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Models
use App\Models\Book;

class BookController extends Controller
{
      public function index()
      {
            $books = Book::all();

            return view('books.index', compact('books'));
      }

      public function show($id)
      {
            $book = Book::where('id', $id)->first();

            return view('books.show', compact('book'));
      }
}