<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Orders
 *
 * @property int $id
 * @property int $user_id
 * @property string $mobile_no
 * @property string $shipping_address
 * @property string $city
 * @property string $district
 * @property int $item_qty
 * @property int $total_amt
 * @property int $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Orders newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Orders newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Orders query()
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereItemQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereMobileNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereShippingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereTotalAmt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Orders whereUserId($value)
 * @mixin \Eloquent
 */
class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'mobile_no',
        'shipping_address',
        'item_qty',
        'total_amt',
    ];
}
