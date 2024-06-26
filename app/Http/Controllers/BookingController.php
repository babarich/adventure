<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    
    public function index(Request $request){

     $books = Book::query()->orderBy('updated_at', 'desc')->get();


     return view('booking.index', compact('books'));
    }
}
