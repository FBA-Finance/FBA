<?php

namespace App\Livewire\Pools;

use App\Models\Pool;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListPool extends Component
{
    public function render()
    {
        $pools = Pool::where('user_id', Auth::id()) 
    ->orWhereHas('members', function ($query) {
        $query->where('user_id', Auth::id()); // ✅ This now queries PoolMember correctly
    })->get();

        return view('livewire.pools.list-pool', compact('pools'));
    }
}