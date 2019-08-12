<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use Kodeine\Metable\Metable;


class Publication extends Model
{
    //
    use SoftDeletes;//, Metable;

    public $table = 'publications';

    protected $fillable = ['title', 'body', 'publication_img', 'attachment', 'user_id'];

    public static function recent(){
    	return Publication::latest()->limit(5)->get();
    } 
}
