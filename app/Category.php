<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
