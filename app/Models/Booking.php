<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'customer_id',
        'service_id',
        'staff_id',
        'booking_date',
        'duration',
        'payment_method',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
    public function staff()
    {
        return $this->belongsTo(User::class, 'staff_id');
    }
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
}
