<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\SubCategories
 *
 * @property int $id
 * @property string $subcategory_name
 * @property int $category_id
 * @property string $category_name
 * @property int $product_count
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategories query()
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategories whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategories whereCategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategories whereProductCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategories whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategories whereSubcategoryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SubCategories whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SubCategories extends Model
{
    use HasFactory;
    protected $fillable = [
        'subcategory_name',
        'category_id',
        'category_name',
        'slug',
    ];
}
