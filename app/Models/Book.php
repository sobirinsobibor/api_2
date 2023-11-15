<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','price', 'id_user', 'id_editor', 'id_book_category'
    ];

    public function book_category(){
        return $this->belongsTo(BookCategory::class, 'id_book_category');
    }

    public function editor(){
        return $this->belongsTo(Editor::class, 'id_editor');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    } 
}
