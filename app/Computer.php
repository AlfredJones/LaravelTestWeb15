<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $table = 'computers';
    protected $fillable = [
        'mark',
        'model',
        'price',
        'index_of_storage'
    ];
}
