<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class LoggedController extends Controller
{
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
        ]);
        $attributes["tags"] = $tags;
        $attributes["user_Id"] = auth()->id();
        Post::create($attributes);
        
        return redirect("/");

    }
}
