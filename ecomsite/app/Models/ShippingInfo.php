<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ShippingInfo
 *
 * @property int $id
 * @property int $user_id
 * @property string $mobile_no
 * @property string $shipping_address
 * @property string $city
 * @property string $district
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingInfo whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingInfo whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingInfo whereMobileNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingInfo whereShippingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingInfo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ShippingInfo whereUserId($value)
 * @mixin \Eloquent
 */
class ShippingInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'mobile_no',
        'shipping_address',
        'city',
        'district',
    ];
}
