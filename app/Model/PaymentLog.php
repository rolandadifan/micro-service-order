<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PaymentLog extends Model
{
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s',
    ];
    protected $fillable = [
        'status', 'payment_type', 'raw_response', 'order_id'
    ];
}
