<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // adding the fillable column
    protected $fillable = ['title','body'];
}
