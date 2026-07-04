<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Borrowing;

class Copy extends Model
{
    public function book(){
        return $this->belongsTo(Book::class);
    }

    public function borrowings(){
        return $this->hasMany(Borrowing::class);
    }
}
