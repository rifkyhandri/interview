<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','slug','body'];

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}