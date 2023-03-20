<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    protected $fillable  = ["title", "excerpt", "body","tags"]; // Assigning the attributes that a user can fill in
    public function author() //relationship with user model
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
