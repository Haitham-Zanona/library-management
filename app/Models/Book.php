<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\Category;
use App\Models\Copy;

class Book extends Model
{


    protected $fillable = ['title', 'author_id', 'publish_date'];
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_category');
    }

    public function copies()
    {
        return $this->hasMany(Copy::class);
    }
}
