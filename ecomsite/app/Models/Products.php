<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Products
 *
 * @property int $id
 * @property string $product_name
 * @property string $product_short_des
 * @property string $product_long_des
 * @property int $price
 * @property int $quantity
 * @property int $category_id
 * @property string $category_name
 * @property int $subcategory_id
 * @property string $subcategory_name
 * @property string $product_img
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Products newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Products newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Products query()
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereProductImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereProductLongDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereProductName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereProductShortDes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereSubcategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereSubcategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
