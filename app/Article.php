<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method find($id)
 */
class Article extends Model
{
    //
    protected $table = "articles";
    protected $fillable = [
        'title',
        'body',
    ];

}
