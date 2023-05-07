<?php

namespace App\Http\Controllers\Auth;

use App\Models\track_user;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create(Request $request): View
    {
        return view("auth.reset-password", ["request" => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $messages = [
            "password.min" => "يجب ان تكون كلمة المرور 8 احرف علي الاقل",
            "password.required" => "كلمة المرور مطلوبة",
            "password.confirmed" => "كلمة المرور غير متطابقين",
            "email.required" => "لبريد الالكتروني مطلوب",
            "email.email" => "البريد الالكتروني غير صالح"

        ];
        $request->validate(
            [
                "token" => ["required"],
                "email" => ["required", "email"],
                "password" => [
                    "required",
                    "confirmed",
                    Rules\Password::defaults(),
                ],
            ],
            $messages
        );

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only(
                "email",
                "password",
                "password_confirmation",
                "token"
            ),
            function ($user) use ($request) {
                $user
                    ->forceFill([
                        "password" => Hash::make($request->password),
                        "remember_token" => Str::random(60),
                    ])
                    ->save();

                event(new PasswordReset($user));
                // track user action
                $track = new track_user();
                $track->action = 'قام بإعادة ضبط  كلمة المرور';
                $track->user_id = $user->user_id;;
                $track->save();
            }

        );


        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        $successMessage = "تم اعادة ضبط كلمة المرور بنجاح";
        $errorMessage = "لا يوجد مثل هذا الحساب";
        return $status == Password::PASSWORD_RESET
            ? redirect()
            ->route("login")
            ->with("status", __($successMessage))
            : back()
            ->withInput($request->only("email"))
            ->withErrors([
                "email" => __(
                    $status === Password::INVALID_USER
                        ? $errorMessage
                        : $status
                ),
            ]);
    }
}
