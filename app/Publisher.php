<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $table = 'publisher';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function books(){
        return $this->hasMany('App\Book');
    }
}
