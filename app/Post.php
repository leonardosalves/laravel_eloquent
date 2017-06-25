<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title','body','published_at'];
    //protected $guarded = ['id','created_at','updated_at'];
    protected $dates = ['created_at','updated_at','published_at'];
}
