<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    #to get the number of categories of a post
    public function categoryPost(){
        return $this->hasMany(CategoryPost::class);
    }
}
