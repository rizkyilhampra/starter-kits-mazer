<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'name',
        'author',
        'publisher',
        'description',
        'image',
        'book_categories',
        'published_date',
    ];

    public static $bookCategories = [
        'Horror',
        'Romance',
        'Fantasy',
    ];

    public static $defaultImageFromCdn =  'https://via.placeholder.com/150';
}
