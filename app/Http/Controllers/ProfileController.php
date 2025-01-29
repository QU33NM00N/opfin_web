<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'bio' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->update($request->all());

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }

    public function index()
    {
    return redirect()->route('profile'); // Or any other logic
    }

}


