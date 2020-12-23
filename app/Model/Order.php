<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s',
        'metadata' => 'array'
    ];
    protected $fillable = [
        'status', 'user_id', 'course_id', 'metadata', 'snap_url'
    ];
}
