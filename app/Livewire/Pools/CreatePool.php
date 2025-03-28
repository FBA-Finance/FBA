<?php

namespace App\Livewire\Pools;

use Illuminate\Support\Str;
use Livewire\Component;
use App\Models\Pool;
use App\Models\PoolMember;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class CreatePool extends Component
{
    public $name;
    public $amount;
    public $cycle_days;
    public $max_participants;
    public $min_participants;
    public $start_date;
    public $end_date;
    public $next_payment_date;

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'amount' => ['required', 'numeric', 'min:0'],
            'cycle_days' => ['required', 'integer', 'min:1'],
            'max_participants' => ['nullable', 'integer', 'min:1'],
            'min_participants' => ['nullable', 'integer', 'min:1'],
            'start_date' => ['nullable', 'date', 'after_or_equal:today'],
            'end_date' => ['nullable', 'date', 'after:start_date'],
            'next_payment_date' => ['nullable', 'date', 'after_or_equal:start_date'],
        ];
    }

    public function createPool()
{
    if (!Auth::check()) {
        Session::flash('error', 'You must be logged in to create a pool.');
        return redirect()->route('login');
    }

    $this->validate();

    // Pool::create([
    //     'name' => $this->name,
    //     'amount' => $this->amount,
    //     'cycle_days' => $this->cycle_days,
    //     'max_participants' => $this->max_participants,
    //     'min_participants' => $this->min_participants,
    //     'start_date' => $this->start_date ? Carbon::parse($this->start_date) : null,
    //     'end_date' => $this->end_date ? Carbon::parse($this->end_date) : null,
    //     'next_payment_date' => $this->next_payment_date ? Carbon::parse($this->next_payment_date) : null,
    //     'user_id' => Auth::id(), // Ensure this is set!
    // ]);

    //Auth::user()->pools()->create($this->validate()); // ✅ AUTO-ASSIGN user_id
    $pool = Auth::user()->pools()->create($this->validate()); // ✅ AUTO-ASSIGN user_id

    // Automatically add the creator as a pool member
    PoolMember::create([
        'user_id' => Auth::id(),
        'pool_id' => $pool->id,
        'rotation_order' => 1, // Since they are the first member, they get position 1
        'received_payout' => false, // Assuming they haven’t received a payout yet
        'status' => 'approved', // Assuming they are automatically approved
        'invite_token' => Str::random(32)
    ]);

    // work on fine tunining the process !!!

    session()->flash('message', 'Pool created successfully!');
    return redirect()->route('pools.index');
}
    public function render()
    {
        return view('livewire.pools.create-pool');
    }
}