<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

//View Posts
Route::get('/homepage',[PostController::class,"users"])->name('homepage.index');

Route::get("/viewpost/{id}",[PostController::class,"viewpost"])->name('viewpost');

//Add Posts
Route::get('/addpage',[PostController::class,"add"])->name('addpage');

Route::post('/store',[PostController::class,"store"])->name('storepost');

//Update Posts
Route::get('/updatepage/{id}',[PostController::class,"update"])->name('updatepage'); //the view page

Route::post('/edit/{id}', [PostController::class, "edit"])->name('edit'); //the actual DB action

//Delete Post

Route::get('/delete/{id}',[PostController::class, "delete"])->name('delete');
