<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RewardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rewards = Reward::where('customer_id', Auth::id())
                         ->paginate(2);

        // Return the rewards to the view
        return view('customer.rewards', compact('rewards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reward $rewards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reward $rewards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reward $rewards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reward $rewards)
    {
        //
    }
}
