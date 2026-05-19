<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'notes',
        'delivery_method',
        'address',
        'payment_method',
        'qty_refill_biasa',
        'qty_refill_premium',
        'qty_galon_baru',
        'qty_pompa_elektrik',
        'subtotal',
        'ongkir',
        'total_amount',
        'payment_status',
    ];
}
