<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'publisher_id',
        'title',
        'author',
        'year',
        'synopsis',
        'image'
    ];

    public function categories(){
        return $this->belongsToMany(Categories::class, 'book_category', 'book_id', 'category_id');
    }

    public function publisher(){
        return $this->belongsTo(Publishers::class, 'publisher_id');
    }



}
