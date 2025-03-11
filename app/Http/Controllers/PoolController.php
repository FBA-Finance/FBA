<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoolController extends Controller
{
    public function create(Request $request){
        $request->validate([
           'name' => 'required|string|max:255',
           'amount' => 'required|numeric|min:0', 
           'cycle_days' => 'required|integer|min:1',
        ]);
    }
}