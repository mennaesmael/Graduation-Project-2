{{-- <!DOCTYPE html>
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
                    <li ui-2_settings-90>
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
            <div class="panel-header panel-header-lg">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h4 class="card-title">عدد الملفات المرفوعة خلال الشهور</h4>
                            </div>
                            <div class="card-body">
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form>
                                                <div class="form-group">
                                                    <select style="width: 3cm;" class="form-control" name="month"
                                                        onchange="this.form.submit()">
                                                        <option value="">اختر الشهر</option>
                                                        @foreach ($filesByMonth as $fileCount)
                                                            <option
                                                                value="{{ $fileCount->year }}-{{ $fileCount->month }}"
                                                                @if ($month == $fileCount->year . '-' . $fileCount->month) selected @endif>
                                                                {{ $fileCount->year }}/{{ $fileCount->month }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-6">
                                            @if (!empty($month))
                                                <div class="stats">
                                                    <i class="fa fa-clock-o"></i>
                                                    {{ $filesByMonth->where('year', explode('-', $month)[0])->where('month', explode('-', $month)[1])->first()->count }}
                                                    files uploaded in {{ $month }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-category">All Logged-In Users</h5>
                                <h4 class="card-title">Users active</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Last Login</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($loggedInUsers as $user)
                                                <tr>
                                                    <td>{{ $user->user_id }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->last_login }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>

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
                    <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
                    <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
                    <script src="../assets/demo/demo.js"></script>
                    <script>
                        $(document).ready(function() {
                            // Javascript method's body can be found in assets/js/demos.js
                            demo.initDashboardPageCharts();

                        });
                    </script>
</body>

</html> --}}
