<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoolMember extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'pool_id',
        'rotation_order',
        'received_payout', 
    ];

    //a pool member belongs to a user
    public function user(){
        return $this->belongsTo(User::class);
    }

    // a pool member belongs to a pool
    public function pool(){
        return $this->belongsTo(Pool::class);
    }
}