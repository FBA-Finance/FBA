<?php

namespace App\Livewire\Pools;

use App\Models\Pool;
use Livewire\Component;

class ShowPool extends Component
{
    public $pool;

    public function mount(Pool $pool) // Matches {pools} in the route
    {
        $this->pool = Pool::find($pool->id); // Explicitly fetch data
    }

    public function render()
    {
        return view('livewire.pools.show-pool', [
            'pool' => $this->pool
        ]);
    }
}