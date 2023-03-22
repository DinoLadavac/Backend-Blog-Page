<?php
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\LoggedController;

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

//Route to register a user
Route::get('register', [RegistrationController::class, 'create'])->middleware("guest");
//Route to store the registrated use
Route::post('register', [RegistrationController::class, 'store'])->middleware("guest");
//Route to log out
Route::post('logout',[LogOutController::class,'destroy'])->middleware('auth');
//Route to log in
Route::get('login',[LogInController::class,'create'])->middleware('guest');
//Post Route to log in
Route::post('login',[LogInController::class,'store'])->middleware('guest');
//Login create post
Route::get('/logged/create', [LoggedController::class, 'create'])->middleware('loginReq');
//Created post
Route::post('/logged/create', [LoggedController::class, 'store'])->middleware('loginReq');