<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\user_table;
use App\Models\User;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view("auth.login");
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        // to see if user not suspended
        /** @var User $user */
        $user = Auth::user();
        if ($user->is_suspended !== "مفعل") {
            Auth::logout();
            return redirect()
                ->back()
                ->withErrors(["email" => "حسابك تم ايقافه"]);
        }
        // to know when user loged in
        $user->last_login = now("Africa/Cairo");
        $user->save();
        user_table::where("user_id", "<>", $user->user_id)->update([
            "last_login" => null,
        ]);

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard("web")->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect("/");
    }
}
