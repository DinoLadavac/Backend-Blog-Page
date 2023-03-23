<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Validation\Rule;

class LoggedController extends Controller
{
    public function index()
    {
        return view("auth.index", ["posts" => Post::all()]);
    }
    public function create()
    {
        return view("auth.createpost");
    }

    public function store()
    {
        $selectedTags = request()->input("tags", []);
        $tag_validation=request()->validate([
            'tags' => 'max:3',
        ]);
        $tags = implode(", ", $selectedTags);
        $attributes=request()->validate([
            "title" => "required",
            "excerpt" => "required",
            "body" => "required",
            "coverimage" => "image"
        ]);
        $attributes["tags"] = $tags;
        $attributes["user_Id"] = auth()->id();
        if(isset($attributes["coverimage"]))
        {
            $attributes["coverimage"]= request()->file("coverimage")->store("public");
        }
        Post::create($attributes);
        return redirect("/");
    }

    public function edit(Post $post)
    {
        return view("auth.edit", ["post" => $post]);
    }
    public function update(Post $post)
    {
        $selectedTags = request()->input("tags", []);
        $tag_validation=request()->validate([
            'tags' => 'max:3',
        ]);
        $tags = implode(", ", $selectedTags);
        $attributes=request()->validate([
            "title" => "required",
            "excerpt" => "required",
            "body" => "required",
            "coverimage" => "image"
        ]);
        if(isset($attributes["coverimage"]))
        {
            $attributes["coverimage"]= request()->file("coverimage")->store("public");
        }
        $attributes["tags"] = $tags;
        $post->update($attributes);
        return redirect("/logged/posts");
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect("/logged/posts");
    }
    public function editAccount()
    {
        return view("auth.editaccount");
    }
    public function updateAccount()
    {
        $user=auth()->user();
        $attributes= request()->validate([
            "name" => ["required","max:255"],
            "username" => ["required","min:3","max:255", Rule::unique("users","username")->ignore($user->id)],
            "email" => ["required","email",Rule::unique("users","username")->ignore($user->id)],
            "password" => ["required","min:7","max:255"]
        ]);
        $user->name = $attributes["name"];
        $user->username = $attributes["username"];
        $user->email = $attributes["email"];
        $user->password = $attributes["password"];
        $user->save();
        return redirect("/")->with("You have successfully edited your account");
    }
    public function destroyAccount()
    {
        $user=auth()->user();
        $user->posts()->delete();
        $user->delete();
        return redirect("/");
    }
}
