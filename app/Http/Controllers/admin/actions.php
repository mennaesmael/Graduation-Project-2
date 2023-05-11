<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Elastic\ScoutDriverPlus\Support\Query;

use App\Models\track_user;
use App\Http\Controllers\Controller;
use App\Models\user_table;
use App\Models\User;
use Illuminate\Http\Request;

class actions extends Controller
{
    //track users
    public function track(Request $request)
    {
        $user_query = $request->input("user_id");

        // Check if the user_query is empty, then return the view without results
        if (empty($user_query)) {
            return view("admin.track");
        }

        $query = $this->buildElasticsearchQuery($user_query);
        $actions = track_user::searchQuery($query)->paginate(40);

        return view("admin.track", compact("user_query", "query", "actions"));
    }

// elasticsearch
private function buildElasticsearchQuery($user_query)
    {
        return Query::bool()->when(
             !empty($user_query),
            function ($builder) use ( $user_query) {
                if (!empty($user_query)) {
                    $builder->must(
                        Query::match()
                            ->field("user_id")

                            ->query($user_query)
                    );
                }


            },
            function ($builder) {
                return $builder->must(Query::matchAll());
            }
        );
    }
    //show users
    public function Show_users(Request $request)
    {
        $query = user_table::query();

        if ($request->filled("user_id")) {
            $query->where("user_id", $request->input("user_id"));
        }
        // search for specific user
        if ($request->filled("user_name")) {
            $query->where("name", "LIKE", "%" . $request->input("user_name") . "%");
        }

        $users = $query->paginate(10);

        return view("admin.user", compact("users"));
    }

    //make admin
    public function makeAdmin($user_id)
    {
        $user = User::find($user_id);

        if ($user->admin == "نعم") {
            $user->admin = "لا";
            $user->save();
            return back();
        } else {
            $user->admin = "نعم";
            $user->save();
            return back();
        }
    }

    //suspend user
    public function suspendUser($user_id)
    {
        $user = User::find($user_id);
        if ($user->is_suspended === "مفعل") {
            $user->is_suspended = "تم ايقافه";
            $user->save();

            if (Auth::user()->user_id === $user->user_id) {
                // check if the suspended user is the same as the authenticated user
                Auth::logout();
                return redirect()
                    ->route("login")
                    ->with("message", "تم إيقاف حسابك.");
            } else {
                return redirect()->back();
            }
        } else {
            $user->is_suspended = "مفعل";
            $user->save();
            return back();
        }
    }
}
