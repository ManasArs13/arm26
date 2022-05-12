<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;

class Post extends Model
{
   public function Category () {
        return $this->belongsTo(Category::class);
    }

    //
}
