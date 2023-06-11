<?php

namespace App\Http\Controllers\Admin;

use App\Models\FilesTable;
use App\Http\Controllers\Controller;

class admin_dashboard extends Controller
{
    //information of user in dashboard
    public function get_information()
{
    $totalFiles = FilesTable::count();

    $loggedInUserId = auth()->user()->user_id;
    $totalUserFiles = FilesTable::where("user_id", $loggedInUserId)->count();

    return view("dashboard", compact("totalFiles", "totalUserFiles"));
}
}
