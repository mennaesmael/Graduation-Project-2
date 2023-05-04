<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\track_user;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ], [
            'current_password.required' => 'حقل كلمة المرور الحالية مطلوب',
            'current_password.current_password' => 'كلمة المرور غير صحيحة',
            'password.required' => 'حقل كلمة المرور الجديدة مطلوب',
            'password.confirmed' => 'كلمة المرور غير متطابقة',
        ]);


        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        $track = new track_user();
        $track->action = 'update password';
        $track->user_id = $request->user()->user_id;
        $track->save();
        return back()->with('status', 'password-updated');
    }
}
