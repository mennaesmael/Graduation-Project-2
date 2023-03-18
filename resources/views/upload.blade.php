<!DOCTYPE html>
<html>

<head>
    <title>Upload</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        table {
            border-collapse: separate;
            border-spacing: 0 20px;
        }

        td {
            padding: 10px;
            vertical-align: middle;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            color: #333;
        }

        .table-header {
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            background-color: #ffffff;
            color: #000000;
            border: none;
        }

        .form-control:focus {
            background-color: #ffffff;
            color: #000000;
            border: none;
        }
    </style>
</head>

<body style="background-color: #ffffff; color: #000000;">
    <div class="container">
        <h1 class="mt-4 mb-4">Upload File</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <td class="table-header">File Name</td>
                    <td>
                        <input id="name" type="text" class="form-control" name="name"
                            value="{{ old('name') }}" required autofocus>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="table-header">Notes</td>
                    <td>
                        <textarea id="notes" name="notes" class="form-control" rows="4" cols="50" autofocus>{{ old('notes') }}</textarea>
                        @error('notes')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="table-header">choose files</td>
                    <td>


                        <input id="file" name="file"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('file') is-invalid @enderror"
                            aria-describedby="file_input_help" type="file"required>

                        @error('file')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                    </td>
                </tr>
            </table>
            <button type="submit" class="btn btn-primary mt-3">{{ __('Upload') }}</button>
        </form>
        <br>
        @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                title: "Success!",
                text: "{{ session('success') }}",
                icon: "success",
                confirmButtonText: "OK"
            });
        </script>
    @endif

        <a href="{{ route('dashboard') }}" class="btn btn-primary mt-3">{{ __('Dashboard') }}</a>
        <a href="{{ route('search') }}" class="btn btn-primary mt-3 ml-3">{{ __('Search') }}</a>
    </div>
</body>

</html>

