<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile_index(){
        $user = Auth::user()->id;
        $userId = User::findOrFail($user);

        return view("Admin.profile.index", compact("userId"));
    }

    public function profile_store(Request $request, Image $imageService)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(), 
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = auth()->user();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $avatarPath = $user->avatar;
        if ($request->hasFile('avatar')) {
            $avatarPath = $imageService->imageHandler(1, $request, 'avatar');
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'avatar' => $avatarPath,
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

}
