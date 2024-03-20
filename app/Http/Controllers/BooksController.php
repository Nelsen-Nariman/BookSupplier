<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Categories;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function readBooks($id=0){
        $category = null;
        if($id == 0){
            $books = Books::all();
        }
        else{
            $category = Categories::findOrFail($id);
            $books = $category->books;
        }
        return view('Home', compact('category', 'books'));

    }

    public function readDetails($id){
        $book = Books::findOrFail($id);
        return view('bookDetail', compact('book'));
    }
}
