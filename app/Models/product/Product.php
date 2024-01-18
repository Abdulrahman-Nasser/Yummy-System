<?php

namespace App\Models\product;

use App\Models\category\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $filable = [
        'name',
        'price',
        'image',
        'filter',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
