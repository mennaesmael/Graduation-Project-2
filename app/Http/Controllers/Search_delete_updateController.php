<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\track_user;
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
        if (!empty($file_query) && empty($user_query)) {
            // Record the search in the track_user table
            $track = new track_user();
            $track->action = 'search';
            $track->user_id = Auth::user()->user_id;
            $track->search_input = $file_query;
            $track->save();
        } elseif (empty($file_query) && !empty($user_query)) {
            $track = new track_user();
            $track->action = 'search';
            $track->user_id = Auth::user()->user_id;
            $track->search_input = $user_query;
            $track->save();
        } elseif (empty($user_query) && empty($file_query) && $request->has('searched')) {
            $track = new track_user();
            $track->action = 'search';
            $track->user_id = Auth::user()->user_id;
            $track->search_input = "press search";
            $track->save();
        } elseif (!empty($user_query) && !empty($file_query)) {
            $track = new track_user();
            $track->action = 'search';
            $track->user_id = Auth::user()->user_id;
            $track->search_input = $file_query;
            $track->save();

            $track = new track_user();
            $track->action = 'search';
            $track->user_id = Auth::user()->user_id;
            $track->search_input = $user_query;
            $track->save();
        }

        if ($request->has('searched') && empty($file_query) && empty($user_query)) {
            // Display all files in the database
            $files = DB::table('files')->paginate(3);
        } elseif (!empty($file_query) || !empty($user_query)) {
            // Display relevant results based on input
            $files = DB::table('files')
                ->when(!empty($file_query), function ($query) use ($file_query) {
                    return $query->where('file_name', 'LIKE', '%' . $file_query . '%');
                })
                ->when(!empty($user_query), function ($query) use ($user_query) {
                    return $query->where(function ($innerQuery) use ($user_query) {
                        $innerQuery->where('user_name', 'LIKE', '%' . $user_query . '%')
                            ->orWhere('user_id', 'LIKE', '%' . $user_query . '%');
                    });
                })
                ->orderBy('file_name', 'asc')
                ->paginate(3);
        } else {
            // Don't display any files
            $files = [];
        }

        return view('search', compact('files', 'file_query', 'user_query'));
    }




    public function destroy(files_table $file)
    {

        // Record the delete action in the track table
        $track = new track_user();
        $track->file_id = $file->file_id;
        $track->action = 'delete';
        $track->user_id = Auth::user()->user_id;
        $track->save();
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

        $track = new track_user();
        $track->file_id = $file->file_id;
        $track->updated_by = $validatedData['updated_by'];
        $track->action = 'update';
        $track->user_id = Auth::user()->user_id;
        $track->save();


        // Redirect back to the file listing page
        return redirect()->route('update', ['file_id' => $file_id])->with('success', 'تم تحديث الملف');
    }
}
