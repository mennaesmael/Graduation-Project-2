<?php

namespace App\Http\Controllers;

use App\Models\files_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Search_delete_updateController extends Controller
{
    public function search(Request $request)
    {
        $file_query = $request->input('query');
        $user_query = $request->input('user_query');

        // Perform the search
        $files = DB::table('files')
            ->where('file_name', 'LIKE', '%' . $file_query . '%')
            ->orderBy('file_name', 'asc');;

            if (!empty($user_query)) {
                $files = $files->where(function ($query) use ($user_query) {
                    $query->where('user_name', 'LIKE', '%' . $user_query . '%')
                        ->orWhere('user_id', 'LIKE', '%' . $user_query . '%');
                })->orderBy('user_name', 'asc');
            }

        $files = $files->get();

        return view('search', ['files' => $files]);
    }



    public function destroy(files_table $file)
    {
        // Delete the file from storage
        Storage::delete($file->file_path);

        // Delete the file record from the database
        $file->delete();

        // Redirect back to the file listing page
        return redirect()->route('search')->with('success', 'File has been deleted');
    }

    public function showUpdateForm($id)
    {
        // Get the file to be updated from the database
        $file = files_table::findOrFail($id);

        // Pass the file data to the update form view
        return view('update', [
            'file' => $file
        ]);
    }




    public function update(Request $request, $file_id)
    {
        // Find the file to be updated from the database
        $file = files_table::findOrFail($file_id);

        // Validate the form data
        $validatedData = $request->validate([
            'file_name' => 'required',
            'notes' => 'required',
            'updated_at' => 'required',
            'updated_by' => 'required',
        ]);

        // Update the file name and notes in the database
        $file->file_name = $validatedData['file_name'];
        $file->notes = $validatedData['notes'];
        $file->updated_at = $validatedData['updated_at'];
        $file->updated_by = $validatedData['updated_by'];
        $file->save();

        // Redirect back to the file listing page
        return redirect()->route('update', ['file_id' => $file_id])->with('success', 'File has been updated');
    }
}
