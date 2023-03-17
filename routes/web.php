<?php
use Illuminate\Support\Facades\Route;
use App\Models\Post;


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
//Function to alert the user u are rederecting him to the main page -> not yet 
function alert_redirect($message)
{
    echo "<script>alert('$message');window.location='/';</script>";
}

//Route of generic root "Mainpage" where all posts can be seen
Route::get('/', function () {
    return view("all_posts", ["blog_posts" =>  Post::all()]);
});

//Route of every post that shows more details of chosen posts
Route::get('post/{id_post}', function ($slug) 
{
    //id_post is used to open the chosen post, method find tries to find the post if it is available
    return view('post', ["id_post" =>  Post::find($slug)]);
})->whereAlphaNumeric("id_post"); //Constraint in form of a regular expression that only allows aplpha numeric characters to be part of the route