<?php
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;


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

//Route of generic root "Mainpage" where all posts can be seen sorted from newest to oldest
Route::get('/', function () {
    return view("all_posts", ["blog_posts" =>  Post::latest("published_at")->with("author")->get()]);
});

//Route of every post that shows more details of chosen posts
Route::get('post/{id_post}', function (Post $id_post) 
{
    //id_post is used to open the chosen post that has the same id as the one user is trying to reach
    return view('post', ["id_post" =>  $id_post]);
});

//Route that displays all posts from the author
Route::get('authors/{author:username}', function (User $author)
{
    return view('all_posts', ["blog_posts" =>  $author->posts->load("author")]);
});