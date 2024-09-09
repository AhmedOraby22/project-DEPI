<?php

namespace App\Http\Controllers;

use App\Models\User; // Import the User model from your application
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function create()
    {
        return view('web.auth.register'); // Updated to match your view path
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:15',
            'gender' => 'required|integer|in:0,1', // Validate gender as 0 or 1
            'birthdate' => 'required|date',
            'password' => 'required|string|min:8|confirmed',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validate image
        ]);

        // Handle the image upload
        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $image->store('avatars', 'public');
            $avatarPath = time().'.'.Request()->avatar->getClientOriginalExtension();
        }

        // Create a new user instance and save it to the database
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phone'],
            'gender' => $validatedData['gender'], // This will store 1 for male, 0 for female
            'birthdate' => $validatedData['birthdate'],
            'password' => Hash::make($validatedData['password']),
            'avatar' => $avatarPath,
        ]);

        // Redirect or show a success message
        return redirect()->route('login')->with('success', 'Account created successfully!');
    }

    public function showProfile()
    {
        $user = Auth::user(); // Get the authenticated user

        // Return the profile view with the user data
        return view('web.auth.profile', compact('user'));
    }

    // Show the profile of a specific user based on their ID
    public function showUserProfile($id)
    {
        $user = User::findOrFail($id); // Find the user by ID or fail

        // Return the profile view with the user data
        return view('web.auth.profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        Log::info('Update function called with id: ' . $id);
        Log::info('Request data: ' . json_encode($request->all()));

        $user = User::findOrFail($id); // Find the user by ID or fail

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'required|string|max:15',
            'gender' => 'required|integer|in:0,1',
            'birthdate' => 'required|date',
            'password' => 'nullable|string|min:8|confirmed', // Password is optional
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validate image
        ]);

        // Handle the image upload
        if ($request->hasFile('avatar')) {
            // Delete the old image if it exists
            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }
            $image = $request->file('avatar');
            $avatarPath = time() . '.' . Request()->avatar->getClientOriginalExtension();
             $image->storeAs('avatars', $avatarPath);
            $user->avatar = $avatarPath;
        }

        // Update the user data
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone'];
        $user->gender = $validatedData['gender'];
        $user->birthdate = $validatedData['birthdate'];

        if ($request->filled('password')) {
            $user->password = Hash::make($validatedData['password']);
        }

        $user->save(); // Save the updated user data to the database

        // Redirect or show a success message
        return redirect()->route('profile', ['id' => $user->id])->with('success', 'Profile updated successfully!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // تأكد من أن المستخدم الذي يحاول الحذف هو نفسه المستخدم المسجل دخوله
        if ($user->id !== Auth::id()) {
            return redirect()->route('profile')->with('error', 'You can only delete your own account.');
        }

        // حذف الصورة إذا كانت موجودة
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        // حذف المستخدم
        $user->delete();

        // تسجيل خروج المستخدم بعد الحذف
        Auth::logout();

        // إعادة توجيه إلى صفحة التسجيل مع رسالة نجاح
        return redirect()->route('register')->with('success', 'Your account has been deleted. Please register again if you wish to create a new account.');
    }
}