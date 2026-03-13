<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    // Wajib ditambahin juga
    protected $table = 'category';

    protected $fillable = [
        'name',
        'product_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id'); // Typo product huruf kecil udah gua benerin
    }
}