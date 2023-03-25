<?php

namespace App\Http\Controllers\Admin;

use App\Models\files_table;
use App\Models\user_table;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;


class admin_dashboard extends Controller
{

    public function get_information()
{
    $filesByMonth = files_table::selectRaw('COUNT(*) as count, YEAR(created_at) as year, MONTH(created_at) as month')
        ->groupBy('year', 'month')
        ->orderBy('year', 'desc')
        ->orderBy('month', 'desc')
        ->get();
    $month = request('month');

    $loggedInUsers = user_table::whereNotNull('last_login')->get();
    return view('admin.dashboard', compact('filesByMonth', 'month','loggedInUsers'));
}

}
