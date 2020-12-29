<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function books() {
        return $this->belongsToMany(Book::class, 'order_details', 'order_id', 'book_id')->withPivot('quantity_order', 'price_each');
    }
}
