<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
//Function that returns all posts of posts that contain searched value in title, excerpt or body
class PostController extends Controller
{
    public function index()
    {
        
        return view("all_posts", ["blog_posts" =>  Post::latest()->filter(request(['search']))->get()]);
    }

    public function showPost(Post $id_post)
    {
        //id_post is used to open the chosen post that has the same id as the one user is trying to reach
        return view('post', ["id_post" =>  $id_post]);
    }
    public function showAuthorsPosts(User $author)
    {
        return view('all_posts', ["blog_posts" =>  $author->posts->load("author")]);
    }
}
