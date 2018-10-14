<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("book/{id}", function ($id) {
    $result = \App\Book::wherePageCount(5)->first()->toJson();
    $result_count = \App\Book::count();
    echo $result_count . "\n";

    $resultMinPageCount = \App\Book::where('page_count', '>', 5)->min('page_count');
    $resultMaxPageCount = \App\Book::where('page_count', '>', 5)->max('page_count');
    $resultAvgPageCount = \App\Book::where('page_count', '>', 5)->avg('page_count');
    echo $result . "\n";
    echo $resultMaxPageCount . "\n";
    echo $resultMinPageCount . "\n";
    /** @var TYPE_NAME $resultPageCount */
    return $resultAvgPageCount;
});

Route::get('cheap_books', function () {
    $cheapBooks = \App\Book::cheapBigBooks()->get();
    return $cheapBooks;
});

Route::get('book-list', function () {
//    return \App\Book::all()->toJson();
    $cheapLong = \App\Book::cheap()->long()->get();
});
