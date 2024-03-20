<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function readCategories(){
        $categories = Categories::all();

        return view('viewCategories', compact('categories'));
    }
}
