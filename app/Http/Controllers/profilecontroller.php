<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
  // ProfileController.php

  public function edit()
{
    $admin = auth()->guard('admin')->user();
    if (!$admin) {
        abort(403, 'Unauthorized action.');
    }
    return view('dashboard.profile.index', compact('admin'));
}

  
  public function update(Request $request)
  {
      $admin = auth()->guard('admin')->user();
      if (!$admin) {
          abort(403, 'Unauthorized action.');
        }
        
        // Validate the incoming request
          $request->validate([
                  'username' => 'nullable|required|string|max:255',  // This is your username in the form
                  'email' => 'nullable|required|string|email|max:255',
                  'password' => 'nullable|string|min:6|confirmed',
              ]);
            
            
            
            $admin->username = $request->input('username');
            $admin->email = $request->input('email');
            if ($request->filled('password')) {
                $admin->password = bcrypt($request->password);
            }
            
     $admin->save();
 
  
      // Redirect back to the profile edit page with a success message
      return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
  }
  
  



}
