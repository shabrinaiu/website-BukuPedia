<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderList extends Model
{
    protected $table = "order_list";

    protected $fillable = [
        'name',
        'address',
        'city',
        'country',
        'zip',
        'phone',
        'notes',
        'order',
        'total',
        'payment',
        'users_id',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
