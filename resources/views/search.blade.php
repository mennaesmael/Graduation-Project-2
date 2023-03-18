<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css">
</head>

<body class="bg-gray-200">
    <form action="{{ route('search') }}" method="GET" class="flex items-center justify-center mt-2">
        <div class="flex">
            <input
                class="w-full py-2 px-4 border border-gray-400 rounded shadow mr-2 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                type="text" name="query" placeholder="Search for files..." aria-label="Search by file name">
            <input
                class="w-full py-2 px-4 border border-gray-400 rounded shadow mr-2 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                type="text" name="user_query" placeholder="Search by user or ID..."
                aria-label="Search by user name or ID">
            <button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                type="submit">Search</button>
        </div>
    </form>

    <div class="flex items-center justify-center mt-3">
        <a href="{{ route('upload') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-2">{{ __('Go to upload page') }}</a>
        <a href="{{ route('dashboard') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">{{ __('Go to dashboard page') }}</a>
    </div>
    <div class="mx-auto py-6 px-4">
        <div class="flex justify-between">
            <h1 class="text-2xl font-semibold text-gray-900">Files</h1>
        </div>

        @if (count($files) > 0)
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg border-gray-100 border">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    NO.
                                </th>
                                <th
                                    class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    File id
                                </th>
                                <th
                                    class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    User id
                                </th>
                                <th
                                    class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    User name
                                </th>
                                <th
                                    class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    File Name
                                </th>
                                <th
                                    class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    File extension
                                </th>
                                <th
                                    class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    File Size
                                </th>
                                <th
                                    class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Notes
                                </th>
                                <th
                                    class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    File path
                                </th>
                                <th
                                    class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Created at
                                </th>
                                <th
                                    class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Updated at
                                </th>
                                <th
                                    class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Updated by
                                </th>
                                <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100"></th>
                                <th class="px-3 py-3 border-b-2 border-gray-200 bg-gray-100"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $index => $file)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span class="font-medium text-gray-800">{{ $index + 1 }}</span>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span class="font-medium text-gray-800">{{ $file->file_id }}</span>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span class="font-medium text-gray-800">{{ $file->user_id }}</span>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span class="font-medium text-gray-800">{{ $file->user_name }}</span>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span class="font-medium text-gray-800">{{ $file->file_name }}</span>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span class="font-medium text-gray-800">{{ $file->file_extension }}</span>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span class="font-medium text-gray-800">{{ $file->file_size }}</span>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span class="font-medium text-gray-800">{{ $file->notes }}</span>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span class="font-medium text-gray-800">{{ $file->file_path }}</span>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span class="font-medium text-gray-800">{{ $file->created_at }}</span>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span class="font-medium text-gray-800">{{ $file->updated_at }}</span>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <span class="font-medium text-gray-800">{{ $file->updated_by }}</span>
                                    </td>
                                    <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                                        <form action="{{ route('delete', $file->file_id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Delete</button>
                                        </form>
                                    </td>
                                    <td class="px-3 py-3 border-b border-gray-200 bg-white text-sm">
                                        <form method="GET" action="{{ route('update', $file->file_id) }}">
                                            @csrf
                                            <button type="submit"
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded">Update</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="border border-gray-400 rounded p-4">
                <p class="text-center text-gray-600 text-lg font-semibold">No files found.</p>
            </div>
        @endif
    </div>
</body>

</html>
