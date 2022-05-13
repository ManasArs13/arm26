<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;

class Post extends Model
{
   public function Category () {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function User () {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    //
}
