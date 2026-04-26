<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    // Wajib ditambahin biar Laravel tau nama tabelnya bukan 'products'
    protected $table = 'product';

    protected $fillable = [
        'name',
        'quantity',
        'price',
        'user_id',
        'category_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); // Typo Class huruf gede di kodingan temen lu udah gua benerin jadi class
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}