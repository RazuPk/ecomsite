<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_short_des',
        'product_long_des',
        'category_id',
        'category_name',
        'subcategory_id',
        'subcategory_name',
        'product_img',
        'slug',
    ];
}
