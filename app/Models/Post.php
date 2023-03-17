<?php

namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
//Model of Post
class Post{
    //Constructor of Post with attributes
    public function __construct(public $title,public $id,public $excerpt,public $date,public $body)
    {}
    //find the post that the user is trying to reach
    public static function find($slug)
    {
        //Call fuction all() and find the first post which id is same as the recieved value
      return static::all()->firstWhere("id", $slug);
    }
    //List all posts of blogs using map functions
    public static function all()
    {
        return collect(File::files(resource_path("posts/")))
            ->map(fn($file) => YamlFrontMatter::parseFile($file)) //get all files in post repository
            ->map(fn($document) => new Post($document->title,$document->id,$document->excerpt,$document->date,$document->body())); //gett all contents of posts
    }
}