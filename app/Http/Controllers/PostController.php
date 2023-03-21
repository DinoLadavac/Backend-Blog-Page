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
        
        return view("all_posts", ["blog_posts" =>  Post::latest()->filter(request(['search']))->paginate(6)->withQueryString()]);
    }

    public function showPost(Post $id_post)
    {
        //id_post is used to open the chosen post that has the same id as the one user is trying to reach
        return view('post', ["id_post" =>  $id_post]);
    }
    public function showAuthorsPosts(User $author)
    {
        $blog_posts = $author->posts()->orderByDesc("created_at")->with("author")->paginate(3)->withQueryString();

        return view('all_posts', ["blog_posts" => $blog_posts]);
        //return view('all_posts', ["blog_posts" =>  $author->posts->sortByDesc("created_at")->load("author")]); //Return sorted latest to oldest
    }
}
