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
        'creator_id',
    ];

    public function creator(){
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function members(){
        return $this->hasMany(User::class);
    }
}