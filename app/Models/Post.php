<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $with = ['category', 'user'];


    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('body', 'like', '%' . request('search') . '%');
        }

        if ($filters['category'] ?? false) {
            $query->whereHas('category', fn ($query) => $query->where('slug', $filters['category']));
        }

        if ($filters['author'] ?? false) {
            $query->whereHas('user', fn ($query) => $query->where('userName', $filters['author']));
        }
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }



    public function category()
    {
        return $this->belongsTo(Category::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
