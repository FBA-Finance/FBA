<?php

namespace App\Livewire\Pools;

use App\Models\Pool;
use App\Models\PoolMember;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class JoinPool extends Component
{
    public $token;
    public $pool;

    public function mount($token)
    {
        $this->pool = Pool::where('invite_token', $token)->firstOrFail();
    }

    public function joinPool()
    {
        if (!$this->pool->participants->contains(Auth::id())) {
            $this->pool->participants()->attach(Auth::id());
            PoolMember::create([
                'user_id' => Auth::id(),
                'pool_id' => $this->pool->id,
                'rotation_order' => $this->pool->members()->count() + 1, 
                'received_payout' => false,
                'status' => 'approved',
            ]);
            session()->flash('message', 'You have joined the pool!');
        } else {
            session()->flash('error', 'You are already in this pool.');
        }

        return redirect()->route('pools.show', $this->pool->id);
    }
    public function render()
    {
        return view('livewire.pools.join-pool');
    }
}