<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'image_url'
    ];
}
