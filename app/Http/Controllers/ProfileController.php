<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'old_password' => 'required',
            'password_confirmation' => 'required'
        ]);

        $user = User::find($request->id);

        if (Hash::check($request->old_password, $user->password)) {
            if ($request->password == $request->password_confirmation) {
                $user->password = Hash::make($request->password);
                $user->save();
                return redirect('profile')->with('success', 'Password changed successfully.');
            } else {
                return redirect('profile')->with('message', 'New Password does not match');
            }
        } else {
            return redirect('profile')->with('message', 'Invalid Old Password');
        }
    }
}
