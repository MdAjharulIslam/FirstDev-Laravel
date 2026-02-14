<?php

use Illuminate\Support\Facades\Route;

// Route::prefix('page')->group(function(){
// Route::get('/about', function(){
//     return "hello about";
// })->name('about');

// });

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/about/{id?}' , function( $id = null){
//     return "<h1> Post ID:  ".$id. "</h1>";
// });

// Route::get('/post/{id?}/comment/{commentId}', function($id, $commentId){
//     return "<h1> post id: ".$id." </h1> <h1>comment id: ".$commentId." </h1>";
// });
// Route::get('/yeald',function(){
//     return view('pages.hello');

// });

// Route::get('/users', function(){
//     $name = 'ajharul islam';
// // return view('pages.userpage', ['user'=>$name]);

// return view('pages.userpage')->with('user', $name);
// });

// Route::fallback(function(){
//     return "<h1>page not found </h1>";
// });



// _________work with controller__________

// use App\Http\controllers\PageController;
// use App\Http\controllers\TestController;

// Route::get('/', function(){
//     return view('pages.header', ['name'=>"ajharul"]);
// });

// Route::get('/',[PageController::class, 'showHome'])->name('home');
// Route::get('/user/{id}',[PageController::class, 'showUser'])->name('user');
// Route::get('/blog',[PageController::class, 'showBolg'])->name('blog');


// Route::controller(PageController::class)->group(function(){
// Route::get('/','showHome')->name('home');
// Route::get('/user', 'showAllUser')->name('allUsers');
// Route::get('/user/{id}', 'showUser')->name('user');

// Route::get('/blog', 'showBolg')->name('blog');
// });

// Route::get('/testing', TestController::class);