<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = [
        'title',
        'category_id',
        'author_id',
        'publisher_id',
        'stock',
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
}
