<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     
    protected $table = 'product';
    public $timestamps = false;
    protected $fillable = [
        'date1','id','name', 'brand','family','factory','type', 'departamento', 'active', 'unity', 'tax',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'date1',
    ];
}
