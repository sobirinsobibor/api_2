<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    use HasFactory;

    protected $fillable = [
        'editor_name'
    ];


    public function book(){
        return $this->hasMany(Book::class, 'id_editor');
    }

}
