<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Category extends Model
{
    protected $fillable  = ["name", "slug"]; // Assigning the attributes that a user can fill in
    use HasFactory;
    public function posts() //relationship with post model
    {
        return $this->hasMany(Post::class);
    }
}
