<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'name',
        'genre',
        'price',
        'stock',
        'image',
    ];    

    protected $casts = [
        'price' => 'decimal:2', // ✅ Diperbaiki dari 'decimal:10,2' ke 'decimal:2'
        'stock' => 'integer',
    ];

    /**
     * Mutator untuk memastikan price selalu bertipe float sebelum disimpan.
     */
    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = is_numeric($value) ? (float) $value : 0.00;
    }
}
