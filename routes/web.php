<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController ;

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

Route::get('/homepage',[PostsController::class,"users"] );

Route::get("/viewpost/{id}",[PostsController::class,"viewpost"] );

Route::get('/addpage',[PostsController::class,"add"] );

Route::get('/updatepage/{id}',[PostsController::class,"update"] );

