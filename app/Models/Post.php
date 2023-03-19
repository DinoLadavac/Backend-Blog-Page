<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;
    protected $fillable  = ["title", "excerpt", "body","category_id"]; // Assigning the attributes that a user can fill in
    public function tag() //relationship with category model
    {
        return $this->belongsTo(Category::class, "category_id");
    }
    public function author() //relationship with user model
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
