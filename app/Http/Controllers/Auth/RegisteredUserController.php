<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\user_table;
use App\Models\track_user;
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
        return view("auth.register");
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $messages = [
            "name.required" => "الاسم مطلوب",
            "name.string" => "يجب أن يكون الاسم مكون من أحرف",
            "admin.required" => "تسجيله كأدمن مطلوب",
            "admin.string" => "يجب أن تكون القيمة نصية",
            "admin.in" => "برجاء الاجابة بنعم او لا",
            "email.required" => "البريد الإلكتروني مطلوب",
            "email.string" => "يجب أن يكون البريد الإلكتروني عبارة عن نص",
            "email.email" => "يجب إدخال بريد إلكتروني صالح",
            "email.unique" => "البريد الإلكتروني مستخدم بالفعل",
            "password.min" => "يجب ان تكون كلمة المرور 8 احرف علي الاقل",
            "password.confirmed" => "كلمة المرور غير متطابقين",
        ];

        $request->validate(
            [
                "name" => ["required", "string"],
                "admin" => ["required", "string", Rule::in(["نعم", "لا"])],
                "email" => [
                    "required",
                    "string",
                    "email",
                    "unique:" . user_table::class,
                ],
                "password" => [
                    "required",
                    "confirmed",
                    Rules\Password::defaults(),
                ],
            ],
            $messages
        );

        $user = user_table::create([
            "name" => $request->name,
            "email" => $request->email,
            "admin" => $request->admin,
            "password" => Hash::make($request->password),
            "is_suspended" => "مفعل",
        ]);
        //
        event(new Registered($user));
        // track registration
        $track = new track_user();
        $track->action = "قام بتسجيل مستخدم جديد";
        $track->user_id = Auth::user()->user_id;
        $track->New_User_Registerd = $user->id;
        $track->save();

        return back()->with("success", "تم بنجاح");
    }
}
