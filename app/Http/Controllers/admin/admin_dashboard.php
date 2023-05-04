<?php

namespace App\Http\Controllers\Admin;

use App\Models\FilesTable;
use App\Http\Controllers\Controller;

class admin_dashboard extends Controller
{
    //information of user in dashboard
    public function get_information()
    {
        $filesByMonth = FilesTable::selectRaw(
            "COUNT(*) as count, YEAR(created_at) as year, MONTH(created_at) as month"
        )
            ->groupBy("year", "month")
            ->orderBy("year", "desc")
            ->orderBy("month", "desc")
            ->get();

        $loggedInUserId = auth()->user()->user_id;

        $userFilesByMonth = FilesTable::selectRaw(
            "COUNT(*) as count, YEAR(created_at) as year, MONTH(created_at) as month"
        )
            ->where("user_id", $loggedInUserId)
            ->groupBy("year", "month")
            ->orderBy("year", "desc")
            ->orderBy("month", "desc")
            ->get();


        return view("dashboard", compact("filesByMonth", "userFilesByMonth"));
    }
}
