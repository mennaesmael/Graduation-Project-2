<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\FilesTable;
use App\Models\track_user;

class FilesController extends Controller
{
    //store files

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:pdf|max:61440',
        ], [
            'file.mimes' => 'الملف يجب ان يكون بصيغة pdf',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs('uploaded/files', $fileName);
        // Save the file details to the database
        $fileRecord = new FilesTable;
        $fileRecord->file_name = $request->name;
        $user = Auth::user();

        $fileRecord->user_id = $user->user_id;
        $fileRecord->user_name = $user->name;

        $fileRecord->file_path = $path;
        $fileRecord->file_size = $file->getSize();
        $fileRecord->file_extension = $file->getClientOriginalExtension();
        $fileRecord->notes = $request->notes ?? 'no notes';
        $fileRecord->updated_by = 'not yet updated';
        $fileRecord->save();
// track files
        $track = new track_user();
        $track->action = 'upload';
        $track->user_id = $user->user_id;
        $track->file_id = $fileRecord->file_id;
        $track->save();
        $fileRecord->save();
        return redirect()->route('upload')->with('success', 'تم بنجاح رفع' . " ملف " . $fileName);
    }
    // //get files by month
    // public function getFilesByMonth()
    // {
    //     $filesByMonth = FilesTable::selectRaw('COUNT(*) as count, YEAR(created_at) as year, MONTH(created_at) as month')
    //         ->groupBy('year', 'month')
    //         ->orderBy('year', 'desc')
    //         ->orderBy('month', 'desc')
    //         ->get();
    //     return $filesByMonth;
    // }
}
