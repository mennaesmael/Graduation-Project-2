<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\user_table;
use App\Models\track_user;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'admin' => ['required', 'string', Rule::in(['نعم', 'لا'])],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.user_table::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = user_table::create([
            'name' => $request->name,
            'email' => $request->email,
            'admin' => $request->admin,
            'password' => Hash::make($request->password),
            'is_suspended' => "مفعل",
        ]);

        event(new Registered($user));

        $track = new track_user();
        $track->action = 'register';
        $track->user_id =Auth::user()->user_id;
        $track->New_User_Registerd = $request->name;
        $track->save();

        return back();
    }
}
