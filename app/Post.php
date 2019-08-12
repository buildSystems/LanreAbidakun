<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Kodeine\Metable\Metable;

class Post extends Model
{
    //
    use SoftDeletes;//, Metable;

    public $table = 'posts';

    protected $fillable = ['title', 'body', 'post_img', 'user_id'];

    public static function recent(){
    	return Post::latest()->limit(5)->get();
    } 
}
