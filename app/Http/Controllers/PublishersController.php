<?php

namespace App\Http\Controllers;

use App\Models\Publishers;
use Illuminate\Http\Request;

class PublishersController extends Controller
{
    public function readPublishers(){
        $publishers = Publishers::all();

        return view('publisher', compact('publishers'));
    }

    public function publisherDetail($id){
        $publisher = Publishers::findOrFail($id);
        $books = $publisher->books;

        return view('publisherDetail', compact('publisher', 'books'));
    }
}
