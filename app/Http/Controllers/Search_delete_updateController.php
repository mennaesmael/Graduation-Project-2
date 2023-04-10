<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\track_user;
use App\Models\FilesTable;
use Illuminate\Http\Request;
use Elastic\ScoutDriverPlus\Support\Query;


class Search_delete_updateController extends Controller
{
    // search method
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
        $isSearched = request()->input('searched') == '1';

        // Define custom analyzer with ngram tokenizer
        $analyzer = [
            'type' => 'custom',
            'tokenizer' => 'ngram_tokenizer',
            'filter' => ['lowercase'],
        ];

        $ngramTokenizer = [
            'type' => 'ngram',
            'min_gram' => 1,
            'max_gram' => 10,
        ];

        $settings = [
            'analysis' => [
                'analyzer' => [
                    'ngram_analyzer' => $analyzer,
                ],
                'tokenizer' => [
                    'ngram_tokenizer' => $ngramTokenizer,
                ],
            ],
        ];

        // Build Elasticsearch query
        $query = Query::bool()
            ->when(!empty($file_query) || !empty($user_query), function ($builder) use ($file_query, $user_query) {
                if (!empty($file_query)) {
                    $builder->must(
                        Query::match()
                            ->field('file_name')
                            ->analyzer('ngram_analyzer') // Use custom analyzer with ngram tokenizer
                            ->minimumShouldMatch('70%')
                            ->query($file_query)
                            ->boost(3)
                    );
                }

                if (!empty($user_query)) {
                    $userSearch = Query::bool()->should(
                        Query::match()
                            ->field('user_name')
                            ->query($user_query)
                            ->fuzziness(0)
                            ->boost(2)
                    );

                    if (ctype_digit($user_query)) {
                        $userSearch->should(
                            Query::term()->field('user_id')->value($user_query)
                        );
                    }

                    $userSearch->minimumShouldMatch(1);
                    $builder->must($userSearch);
                }
            }, function ($builder) {
                return $builder->must(Query::matchAll());
            });

        // Execute Elasticsearch query and get the models
        if ($isSearched) {
            $searchResult = FilesTable::searchQuery($query)->execute();
            $files = FilesTable::searchQuery($query)->paginate(40);
        } else {
            $searchResult = [];
            $files = [];
        }
        return view('search', compact('files', 'file_query', 'user_query'));
    }
    //view update page
    public function showUpdateForm($id)
    {
        // Get the file to be updated from the database
        $file = FilesTable::findOrFail($id);

        // Pass the file data to the update form view
        return view('update', [
            'file' => $file
        ]);
    }

    // suggestion search
    public function suggestions(Request $request)
    {
        $search = $request->input('query');
        $suggestions = FilesTable::search($search . '*') // Change wildcard query
            ->take(50)
            ->get()
            ->pluck('file_name');

        return response()->json($suggestions);
    }
    // update file method
    public function update(Request $request, $file_id)
    {
        // Find the file to be updated from the database
        $file = FilesTable::findOrFail($file_id);

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
