<?php
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Route of generic root "Mainpage" where all posts can be seen sorted from newest to oldest
Route::get('/', [PostController::class, "index"]); //Using post controller

//Route of every post that shows more details of chosen posts
Route::get('post/{id_post}', [PostController::class, "showPost"]);


//Route that displays all posts from the author
Route::get('authors/{author:username}', [PostController::class, "showAuthorsPosts"]);