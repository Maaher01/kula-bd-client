<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        // Validate and auto-redirect back on failure
        $validated = $request->validate([
            'name'   => 'required|string|max:255',
            'email'  => 'nullable|string|email|max:255|unique:users,email',
            'mobile' => 'required|string|max:15|unique:users,mobile',
            'password' => 'required|string|min:7|confirmed',
        ]);

        // Fetch the "User" role
        $role = Role::where('name', 'User')->firstOrFail();

        // Create user
        $user = User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'] ?? null,
            'mobile'   => $validated['mobile'],
            'password' => Hash::make($validated['password']),
            'role_id'  => $role->id,
        ]);

        // Auto-login (optional)
        auth()->login($user);

        // Redirect wherever you want (dashboard, home, etc.)
        return redirect('/')
            ->with('success', 'User registered successfully!');
    }
}
