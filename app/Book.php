<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'author_id',
        'publisher_id',
        'stock',
        'sold',
        'price',
        'image'
    ];
    protected $guarded = [
        'created_at',
        'updated_at'
    ];

    public function category(){
        return $this->belongsTo('App\BookCategory');
    }

    public function author(){
        return $this->belongsTo('App\Author');
    }

    public function publisher(){
        return $this->belongsTo('App\Publisher');
    }

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
