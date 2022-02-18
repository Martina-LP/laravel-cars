<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'brand',
        'description',
        'src',
        'price',
        'model',
        'cc'
    ];
}
