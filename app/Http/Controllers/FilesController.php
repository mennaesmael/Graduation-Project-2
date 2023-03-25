<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\files_table;
use App\Models\track_user;

class FilesController extends Controller
{


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|mimes:pdf|max:61440',
        ]);
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs('uploaded/files', $fileName);
        // Save the file details to the database
        $fileRecord = new files_table;
        $fileRecord->file_name = $request->name;
        $user = Auth::user();
        if ($user) {
            $fileRecord->user_id = $user->user_id;
            $fileRecord->user_name = $user->name;
        }
        $fileRecord->file_path = $path;
        $fileRecord->file_size = $file->getSize();
        $fileRecord->file_extension = $file->getClientOriginalExtension();
        $fileRecord->notes = $request->notes ?? 'no notes';
        $fileRecord->updated_by = 'not yet updated';
        $fileRecord->save();

        $track = new track_user();
        $track->action = 'upload';
        $track->user_id = $user->user_id;
        $track->file_id = $fileRecord->file_id;
        $track->save();
        return redirect()->route('upload')->with('success', 'File ' . $fileName . ' uploaded successfully.');
    }

    public function getFilesByMonth()
    {
        $filesByMonth = files_table::selectRaw('COUNT(*) as count, YEAR(created_at) as year, MONTH(created_at) as month')
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();
        return $filesByMonth;
    }
}
