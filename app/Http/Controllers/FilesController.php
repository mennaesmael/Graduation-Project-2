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
        $fileRecord->notes = $request->notes ?? 'لا يوجد ملاحظات';
        $fileRecord->updated_by = 'لم يتم تحديثه بعد';
        $fileRecord->save();
        // track files
        $track = new track_user();
        $track->action = 'قام برفع الملفات';
        $track->user_id = $user->user_id;
        $track->file_id = $fileRecord->file_id;
        $track->save();
        $fileRecord->save();
        return redirect()->route('upload')->with('success', 'تم بنجاح رفع' . " ملف " . $fileName);
    }
}
