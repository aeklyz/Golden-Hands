<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RewardController extends Controller
{
    public function redeem($rewardId)
    {
        $reward = Reward::findOrFail($rewardId);

        // Ensure the reward is redeemable
        if ($reward->is_redeemable) {
            $user = auth()->user();

            // Add the reward points to the user's points balance
            $user->points += $reward->points;
            $user->save();

            // Update the reward to mark it as redeemed
            $reward->is_redeemable = false;
            $reward->save();

            $rewards = Reward::where('customer_id', Auth::id())
                ->where('is_redeemable', true)
                ->paginate(2);

            // Return the rewards to the view
            return view('customer.rewards', compact('rewards'));

            // Return a view with a success message
            /*
            return view('rewards.redeemed', [
                'reward' => $reward,
                'user' => $user,
                'message' => 'Reward redeemed successfully!',
            ]);
            */
        } else {
            return back();
            // If the reward is not redeemable, return with an error message
            // return back()->with('error', 'This reward is no longer redeemable.');
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rewards = Reward::where('customer_id', Auth::id())
            ->where('is_redeemable', true)
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
