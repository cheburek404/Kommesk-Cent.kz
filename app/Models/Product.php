<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'title',
        'subtitle',
        'pre_description',
        'price',
        'category',
        'image',
        'description',
    ];

    public function cat() {
        return $this->belongsTo(Category::class, 'category', 'id');
    }
}
