<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_category_name'
    ];

    public function book(){
        return $this->hasMany(Book::class, 'id_book_category');
    }
}
