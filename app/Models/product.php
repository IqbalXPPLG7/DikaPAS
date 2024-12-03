<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',  
        'nama', 
        'harga',  
        'stock', 
        'images',
    ];

    public function idProduct(): BelongsTo
    {
        return $this->belongsTo(idProduct::class, 'product_id');
    }
}