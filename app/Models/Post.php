<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;
    protected $fillable  = ["title", "excerpt", "body","tags","user_Id","coverimage"]; // Assigning the attributes that a user can fill in
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
            $query
            ->where("title", "like", "%" . $search . "%") //search in title
            ->orWhere("body", "like", "%" . $search . "%") //search in body
            ->orWhere("excerpt", "like", "%" . $search . "%") //search in excerpt
        );
    }
    public function author() //relationship with user model
    {
        return $this->belongsTo(User::class, "user_id");
    }
}
