<?php

namespace App\Http\Controllers\Admin;

use App\Models\track_user;
use App\Http\Controllers\Controller;
use App\Models\user_table;
use App\Models\User;
use Illuminate\Http\Request;

class actions extends Controller
{
    public function index(Request $request)
    {
        $query = track_user::query();

        if ($request->filled('user_id')) {
            $query->where('user_id', $request->input('user_id'));
        }

        $actions = $query->paginate(30);

        return view('admin.tables', compact('actions'));
    }

    public function Show_users(Request $request)
    {
        $query = user_table::query();

        if ($request->filled('user_id')) {
            $query->where('user_id', $request->input('user_id'));
        }

        $users = $query->paginate(10);

        return view('admin.user', compact('users'));
    }
    public function makeAdmin($user_id)
    {
        $user = User::find($user_id);

        if ($user->admin == 'نعم') {
            $user->admin = 'لا';
            $user->save();
            return back();
        } else {
            $user->admin = 'نعم';
            $user->save();
            return back();
        }
    }
}
