<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pool extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'amount',
        'cycle_days',
        'user_id',
        'max_participants',
        'min_participants',
        'start_date',
        'end_date',
        'next_payment_date',
    ];

    public function creator(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function members(){
        return $this->hasMany(PoolMember::class);
    }

}