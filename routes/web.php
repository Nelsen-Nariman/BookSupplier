<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\PublishersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [BooksController::class, 'readBooks', function () {
    return view('home');
}])->name('home');

Route::get('/publisher', [PublishersController::class, 'readPublishers'])->name('readPublisher');

Route::get('/contact', function(){
    return view('contact');
})->name('readContact');

Route::get('/category/{id}', [BooksController::class, 'readBooks'])->name('readCategory');

Route::get('/publisher/{id}', [PublishersController::class, 'publisherDetail'])->name('publisherDetail');

Route::get('/book/{id}', [BooksController::class, 'readDetails'])->name('bookDetail');


