<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rewards extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'points',
        'is_redeemable',
        'user_id',
    ];

    /**
     * Get the user that owns the reward.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
