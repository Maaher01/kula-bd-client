<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function editProfile()
    {
        $user = auth()->user();
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:users,email,' . $user->id,
            'mobile' => 'required|string|max:14',
        ]);

        $user->update($request->only('name', 'email', 'mobile'));

        return redirect()->back()->with('success', 'Profile Updated Successfully!');
    }

    public function updateProfilePhoto(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:2048'],
        ]);

        $user = auth()->user();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('userimages', 'public');
            $user->photo = asset('storage/' . $path);
            $user->save();
        }

        return response()->json(['status' => true, 'photo' => $user->photo]);
    }
}
