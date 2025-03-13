<?php

namespace App\Http\Controllers;

use App\Models\Pool;
use App\Models\PoolMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoolController extends Controller
{
    // List all pools
    public function index(){
        $pools =  Pool::all();
        return response()->json($pools);
    }
    
    // create a new pool
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'total_members' => 'required|integer|min:2'
        ]);

        $pool = Pool::create([
            'name' => $request->name,
            'total_members' => $request->total_members,
            'user_id' => Auth::id()
        ]);
    }

    //show a specific pool
    public function show($id){
        $pool = Pool::with(['members'])->findOrFail($id);
        return response()->json($pool);
    }

    //accept a user's join request (only the pool creator)
    public function acceptMember(Request $request, $poolId){
        $pool = Pool::where('id', $poolId)->where('user_id', Auth::id())->firstOrFail();

        $member = PoolMember::where('pool_id', $poolId)
                            ->where('user_id', $request->user_id)
                            ->where('status', 'pending')
                            ->first();

        if (!$member) {
            return response()->json(['message' => 'No pending request found'], 404);
        }

        // Approving the member
        $nextPosition = PoolMember::where('pool_id', $poolId)->count() + 1;
        $member->update(['status' => 'approved', 'rotation_order' => $nextPosition]);

        return response()->json(['message' => 'Member added successfully!', 'member' => $member]);
    }
}