<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'author_id',
        'image',
        'description',
        'price',
        'isbn',
        'inStock',
        'sold',
    ];

    public function author(){
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function orders() {
        return $this->belongsToMany(Book::class, 'order_details', 'book_id', 'order_id')->withPivot('quantity_order', 'price_each');
    }
}
