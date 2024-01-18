<?php

namespace App\Models\category;

use App\Models\product\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $filable = [
        'name',
        'filter'
    ];

    // make realtion
    public function products(){
        return $this->hasMany(Product::class);
    }

}
