<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    //
    //
    //
    //
     public function categorie()
    {
        return $this->belongsTo(Categories::class);
    }

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
