<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Stock_Movement extends Model
{
    use Notifiable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'stock_movement';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','product_id', 'new_quantity', 'date1',
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
