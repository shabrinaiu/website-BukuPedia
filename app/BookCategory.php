<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    protected $table = 'book_category';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function books(){
        return $this->hasMany('App\Book');
    }
}
