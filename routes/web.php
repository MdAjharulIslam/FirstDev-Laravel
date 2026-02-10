<?php

use Illuminate\Support\Facades\Route;

Route::prefix('page')->group(function(){
Route::get('/about', function(){
    return "hello about";
})->name('about');

});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about/{id?}' , function( $id = null){
    return "<h1> Post ID:  ".$id. "</h1>";
});

Route::get('/post/{id?}/comment/{commentId}', function($id, $commentId){
    return "<h1> post id: ".$id." </h1> <h1>comment id: ".$commentId." </h1>";
});

Route::fallback(function(){
    return "<h1>page not found </h1>";
});

