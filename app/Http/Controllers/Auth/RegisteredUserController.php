<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse  // Return JsonResponse explicitly
    {
        try {
            // Validate incoming data
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            // Create user if validation passes
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->input('password')),
                'is_admin'=> 0,
            ]);

            // Fire Registered event
            event(new Registered($user));

            // Log the user in
            Auth::login($user);

            // Return success response
            return response()->json(['status' => 'success', 'message' => 'Registration successful'], 201);  // HTTP 201 for successful creation
        } catch (\Exception $e) {
            // Log the exception for debugging
            Log::error('Registration failed: ' . $e->getMessage());
            
            // Return error response
            return response()->json(['status' => 'error', 'message' => 'Registration failed'], 500);  // HTTP 500 for server error
        }
    }
}
