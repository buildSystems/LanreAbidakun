<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    //
    public $table = 'publications';

    protected $fillable = ['title', 'body', 'publication_img'];
}
