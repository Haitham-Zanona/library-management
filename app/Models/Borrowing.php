<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Copy;
use App\Models\User;

class Borrowing extends Model
{

    protected $fillable = ['user_id', 'copy_id', 'borrow_date', 'due_date', 'return_date'];

    public function copy()
    {
        return $this->belongsTo(Copy::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
