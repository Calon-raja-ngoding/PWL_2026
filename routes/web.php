<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use Faker\Guesser\Name;

// Route::get('/helo', function () {
//     return ('Hello Word');
// });
// Route::get('/world', function () {
//     return ('World');
// });
// Route::get('/', function () {
//     return ('Selamat Datang');
// });
// Route::get('/about', function () {
//     return ('Nabil | 244107020114');
// });
// Route::get('/user/{name?}', function ($name = 'jhon') {
//     return 'Nama saya '.$name;
// });
// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-: '.$postId.', Komentar ke-: '.$commentId;
// });
// Route::get('/articles/{id}', function ($id) {
//     return 'Artikel dengan ID: '.$id;
// });
// Route::get('/user/{name?}', function ($name='Jhon Doe') {
//     return 'Nama saya '.$name;
// });
// Route::get('/hello',[WelcomeController::class,'hello']); 
// Route::get('/',HomeController::class);
// Route::get('/articles/{id}',ArticleController::class);
// Route::get('/about',AboutController::class);
// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);
Route::get('/greeting/{name}/{occupotion}',[WelcomeController::class,'greeting']);