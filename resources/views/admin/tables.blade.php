<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        لوحة القيادة
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>
<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="./dashboard">
                            <i class="now-ui-icons design_app"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        @if (Route::has('register'))
                            @auth
                                <a href="{{ route('register') }}">{{ __(' create users ') }}
                                    <i class="now-ui-icons ui-2_settings-90"></i>
                                </a>
                            @endauth
                        @endif

                    </li>
                    <li>
                        <a href="./user">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>Workers</p>
                        </a>
                    </li>
                    <li>
                        <a href="./tables">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Tracking users</p>
                        </a>
                    </li>
                    <li>
                        <a href="../dashboard">
                            <i class="now-ui-icons business_globe"></i>
                            <p>Main dashboard</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel" id="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="#pablo">Table List</a>
                    </div>

                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form method="get" action="{{ route('tracking') }}">
                            <div class="input-group no-border">
                                <input type="text" value="{{ request('user_id') }}" name="user_id" class="form-control" placeholder="Search by User ID...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="now-ui-icons ui-1_zoom-bold"></i> Search
                                    </button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"> tracking user</h4>
                            </div>
                            <div class="card-body">
                                @if ($actions->isEmpty())
                                    <p>No users found.</p>
                                @else
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>ID</th>
                                                <th>User ID</th>
                                                <th>File ID</th>
                                                <th>Action</th>
                                                <th>Search Input</th>
                                                <th>Updated By</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($actions as $action)
                                                <tr>
                                                    <td>{{ $action->id }}</td>
                                                    <td>{{ $action->user_id }}</td>
                                                    <td>{{ $action->file_id }}</td>
                                                    <td>{{ $action->action }}</td>
                                                    <td>{{ $action->search_input }}</td>
                                                    <td>{{ $action->updated_by }}</td>
                                                    <td>{{ $action->created_at }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $actions->links() }}
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!--   Core JS Files   -->
                <script src="../assets/js/core/jquery.min.js"></script>
                <script src="../assets/js/core/popper.min.js"></script>
                <script src="../assets/js/core/bootstrap.min.js"></script>
                <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
                <!--  Google Maps Plugin    -->
                <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
                <!-- Chart JS -->
                <script src="../assets/js/plugins/chartjs.min.js"></script>
                <!--  Notifications Plugin    -->
                <script src="../assets/js/plugins/bootstrap-notify.js"></script>
                <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
                <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
                <script src="../assets/demo/demo.js"></script>
</body>

</html>
