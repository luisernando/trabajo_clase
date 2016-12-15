<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    //
    //
    //
    //
     public function products()
    {
        return $this->hasMany(Products::class);
    }
     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
