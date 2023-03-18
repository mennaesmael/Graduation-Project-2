<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Update File</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update File') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('update', $file->file_id) }}">
                            @csrf
                            <div class="form-group row">
                                <label for="file_name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('File Name') }}</label>

                                <div class="col-md-6">
                                    <input id="file_name" type="text"
                                        class="form-control @error('file_name') is-invalid @enderror" name="file_name"
                                        value="{{ $file->file_name }}" required autofocus>

                                    @error('file_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="notes"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Notes') }}</label>

                                <div class="col-md-6">
                                    <textarea id="notes" class="form-control @error('notes') is-invalid @enderror" name="notes">{{ $file->notes }}</textarea>

                                    @error('notes')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="updated_at"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Updated At') }}</label>

                                <div class="col-md-6">
                                    <input id="updated_at" type="datetime-local"
                                        class="form-control @error('updated_at') is-invalid @enderror" name="updated_at"
                                        value="{{ $file->updated_at }}" required>

                                    @error('updated_at')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="updated_by"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Updated By') }}</label>

                                <div class="col-md-6">
                                    <input id="updated_by" type="text"
                                        class="form-control @error('updated_by') is-invalid @enderror" name="updated_by"
                                        value="{{ $file->updated_by }}" required>

                                    @error('updated_by')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0 text-center">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('update') }}
                                    </button>
                                </div>
                            </div>

                        </form>
                        <div class="row justify-content-center mt-5">
                            <div class="col-md-4">
                                <a href="{{ route('dashboard') }}"
                                    class="btn btn-primary btn-block">{{ __('Dashboard') }}</a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('search') }}"
                                    class="btn btn-primary btn-block">{{ __('Search') }}</a>
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
