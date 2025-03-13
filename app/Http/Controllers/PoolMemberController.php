<?php

namespace App\Http\Controllers;

use App\Models\PoolMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoolMemberController extends Controller
{
    public function joinPool(Request $request, $poolId){
        $userId = Auth::id();

        // Check if user is already in a pool
        if (PoolMember::where('user_id', $userId)->where('status', 'approved')->exists()) {
            return response()->json(['message' => 'You can only be in one pool at a time!'], 400);
        }

        // Check if already requested
        if (PoolMember::where('user_id', $userId)->where('pool_id', $poolId)->where('status', 'pending')->exists()) {
            return response()->json(['message' => 'You already requested to join this pool!'], 400);
        }

        PoolMember::create([
            'user_id' => $userId,
            'pool_id' => $poolId,
            'rotation_order' => 0, // Will be updated when accepted
            'status' => 'pending'
        ]);

        return response()->json(['message' => 'Join request sent!']);
    }

    public function listMembers($poolId){
        $members = PoolMember::where('pool_id', $poolId)->where('status', 'approved')->get();
        return response()->json($members);
    }
}