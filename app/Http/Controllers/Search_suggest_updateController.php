<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

use App\Models\track_user;
use App\Models\FilesTable;
use Illuminate\Http\Request;
use Elastic\ScoutDriverPlus\Support\Query;


class Search_suggest_updateController extends Controller
{
    // search method
    // public function search(Request $request)
    // {
    //     // $file_query = $request->input('query');
    //     // $user_query = $request->input('user_query');
    //     // if (!empty($file_query) && empty($user_query)) {
    //     //     // Record the search in the track_user table
    //     //     $track = new track_user();
    //     //     $track->action = 'search';
    //     //     $track->user_id = Auth::user()->user_id;
    //     //     $track->search_input = $file_query;
    //     //     $track->save();
    //     // } elseif (empty($file_query) && !empty($user_query)) {
    //     //     $track = new track_user();
    //     //     $track->action = 'search';
    //     //     $track->user_id = Auth::user()->user_id;
    //     //     $track->search_input = $user_query;
    //     //     $track->save();
    //     // } elseif (empty($user_query) && empty($file_query) && $request->has('searched')) {
    //     //     $track = new track_user();
    //     //     $track->action = 'search';
    //     //     $track->user_id = Auth::user()->user_id;
    //     //     $track->search_input = "press search";
    //     //     $track->save();
    //     // } elseif (!empty($user_query) && !empty($file_query)) {
    //     //     $track = new track_user();
    //     //     $track->action = 'search';
    //     //     $track->user_id = Auth::user()->user_id;
    //     //     $track->search_input = $file_query;
    //     //     $track->save();

    //     //     $track = new track_user();
    //     //     $track->action = 'search';
    //     //     $track->user_id = Auth::user()->user_id;
    //     //     $track->search_input = $user_query;
    //     //     $track->save();
    //     // }
    //     // $isSearched = request()->input('searched') == '1';

    //     // // Build Elasticsearch query
    //     // $query = Query::bool()
    //     //     ->when(!empty($file_query) || !empty($user_query), function ($builder) use ($file_query, $user_query) {
    //     //         if (!empty($file_query)) {
    //     //             $builder->must(
    //     //                 Query::match()
    //     //                     ->field('file_name')
    //     //                     ->analyzer('arabic')
    //     //                     ->fuzziness(2)
    //     //                     ->minimumShouldMatch('80%')
    //     //                     ->query($file_query)
    //     //                     ->boost(3)
    //     //             );
    //     //         }

    //     //         if (!empty($user_query)) {
    //     //             $userSearch = Query::bool()->should(
    //     //                 Query::match()
    //     //                     ->field('user_name')
    //     //                     ->analyzer('arabic')
    //     //                     ->query($user_query)

    //     //             );


    //     //             $userSearch->minimumShouldMatch(1);
    //     //             $builder->must($userSearch);
    //     //         }
    //     //     }, function ($builder) {
    //     //         return $builder->must(Query::matchAll());
    //     //     });

    //     // // Execute Elasticsearch query and get the models

    //     // $cacheKey = 'search:' . md5($file_query . $user_query);
    //     // $cacheTTL = 21600; // Cache for one day (6 hours)
    //     // if ($isSearched) {
    //     //     $files = Cache::remember($cacheKey, $cacheTTL, function () use ($query) {
    //     //         $searchResult = FilesTable::searchQuery($query)->execute();
    //     //         return FilesTable::searchQuery($query)->paginate(40);
    //     //     });
    //     // } else {
    //     //     $searchResult = [];
    //     //     $files = [];
    //     // }
    //     // return view('search', compact('files', 'file_query', 'user_query'));
    //     $file_query = $request->input('query');
    //     $user_query = $request->input('user_query');

    //     // Record the search in the track_user table
    //     if (!empty($file_query) || !empty($user_query)) {
    //         $track = new track_user();
    //         $track->action = 'search';
    //         $track->user_id = Auth::user()->user_id;

    //         if (!empty($file_query)) {
    //             $track->search_input = $file_query;
    //             $track->save();
    //         }

    //         if (!empty($user_query)) {
    //             $track->search_input = $user_query;
    //             $track->save();
    //         }

    //         if (!empty($file_query) && !empty($user_query)) {
    //             $track->action = 'search';
    //             $track->user_id = Auth::user()->user_id;
    //             $track->search_input = $file_query;
    //             $track->save();

    //             $track = new track_user();
    //             $track->action = 'search';
    //             $track->user_id = Auth::user()->user_id;
    //             $track->search_input = $user_query;
    //             $track->save();
    //         }
    //     }

    //     $isSearched = request()->input('searched') == '1';

    //     // Build Elasticsearch query
    //     $query = Query::bool()
    //         ->when(!empty($file_query) || !empty($user_query), function ($builder) use ($file_query, $user_query) {
    //             if (!empty($file_query)) {
    //                 $builder->must(
    //                     Query::match()
    //                         ->field('file_name')
    //                         ->analyzer('arabic')
    //                         ->fuzziness(2)
    //                         ->minimumShouldMatch('80%')
    //                         ->query($file_query)
    //                         ->boost(3)
    //                 );
    //             }
    //             if (!empty($user_query)) {
    //                 $userSearch = Query::bool()->should(
    //                     Query::match()
    //                         ->field('user_name')
    //                         ->analyzer('arabic')
    //                         ->query($user_query)
    //                 );
    //                 $userSearch->minimumShouldMatch(1);
    //                 $builder->must($userSearch);
    //             }
    //         }, function ($builder) {
    //             return $builder->must(Query::matchAll());
    //         });

    //     // Execute Elasticsearch query and get the models
    //     $cacheKey = 'search:' . md5($file_query . '|' . $user_query . '|' . request()->input('page', 1));
    //     $cacheTags = ['search_results']; // Add a cache tag for search results
    //     $cacheTTL = 600; // Cache for 10 minutes

    //     if ($isSearched) {
    //         $files = Cache::tags($cacheTags)->remember($cacheKey, $cacheTTL, function () use ($query) {
    //             $searchResult = FilesTable::searchQuery($query)->execute();
    //             return FilesTable::searchQuery($query)->paginate(40);
    //         });
    //     } else {
    //         $searchResult = [];
    //         $files = [];
    //     }

    //     return view('search', compact('files', 'file_query', 'user_query'));
    // }

    // search method
    public function search(Request $request)
    {
        $isSearched = $request->input('searched') == '1';
        $file_query = $request->input('query');
        $user_query = $request->input('user_query');
        // track search
        if (!empty($file_query) || !empty($user_query)) {
            $track = new track_user();
            $track->action = 'search';
            $track->user_id = Auth::user()->user_id;

            if (!empty($file_query)) {
                $track->search_input = $file_query;
                $track->save();
            }

            if (!empty($user_query)) {
                $track->search_input = $user_query;
                $track->save();
            }

            if (!empty($file_query) && !empty($user_query)) {
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
        }
        // Check if both inputs are empty
        if ($isSearched && empty($file_query) && empty($user_query)) {
            return redirect()->route('search')->with('error', 'من فضلك قم بكتابة شيء للبحث عنه');
        }


        // Build Elasticsearch query
        $query = $this->buildElasticsearchQuery($file_query, $user_query);

        // Get cache key and cache tags
        $cacheKey = $this->getCacheKey($file_query, $user_query, $request->input('page', 1));
        $cacheTags = ['search_results'];

        // Cache for 10 minutes
        $cacheTTL = 600;

        if ($isSearched) {
            $files = Cache::tags($cacheTags)->remember($cacheKey, $cacheTTL, function () use ($query) {
                return FilesTable::searchQuery($query)->paginate(40);
            });
        } else {
            $files = [];
        }

        return view('search', compact('files', 'file_query', 'user_query'));
    }
    // elasticsearch query
    private function buildElasticsearchQuery($file_query, $user_query)
    {
        return Query::bool()
            ->when(!empty($file_query) || !empty($user_query), function ($builder) use ($file_query, $user_query) {
                if (!empty($file_query)) {
                    $builder->must(
                        Query::match()
                            ->field('file_name')
                            ->analyzer('custom_arabic_analyzer')
                            ->fuzziness(2)
                            ->prefixLength(2) // Add prefix length
                            ->minimumShouldMatch('80%')
                            ->query($file_query)
                            ->boost(3)
                    );
                }

                if (!empty($user_query)) {
                    $userSearch = Query::bool()->should(
                        Query::match()
                            ->field('user_name')
                            ->analyzer('custom_arabic_analyzer')
                            ->query($user_query)
                    );

                    $userSearch->minimumShouldMatch(1);
                    $builder->must($userSearch);
                }
            }, function ($builder) {
                return $builder->must(Query::matchAll());
            });
    }
    //cache
    private function getCacheKey($file_query, $user_query, $page)
    {
        return 'search:' . md5($file_query . '|' . $user_query . '|' . $page);
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
        $suggestions = FilesTable::search('*' . $search . '*') 
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

        // Clear the cache for search results
        Cache::tags(['search_results'])->flush();


        $track = new track_user();
        $track->file_id = $file->file_id;
        $track->updated_by = $validatedData['updated_by'];
        $track->action = 'update';
        $track->user_id = Auth::user()->user_id;
        $track->save();



        // Redirect back to update page
        return redirect()->route('update', ['file_id' => $file_id])->with('success', 'تم تحديث الملف');
    }
}
