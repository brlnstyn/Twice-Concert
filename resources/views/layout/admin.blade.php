<!doctype html>
<html lang="en">

<head>
    <title>Dashboard Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../sidebar/css/style.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="active">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary" style="background-color: #faa2d6">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h1 style="color:white;"><a href="#" class="logo"><img src="../landing/images/logo.png"
                            width="60" height="60" alt=""></a>Twice</h1>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="/dashboard"><span class="fa fa-home mr-3"></span> Daftar Pesanan</a>
                    </li>
                    <li>
                        <a href="/check-in"><span class="fa fa-user mr-3"></span> Check In</a>
                    </li>
                    <li>
                        <a href="/laporan"><span class="fa fa-briefcase mr-3"></span> Laporan</a>
                    </li>
                    <li>
                        <a href="/setting-konser"><span class="fa fa-sticky-note mr-3"></span> Setting Konser</a>
                    </li>
                    <li>
                        <form action="logout" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-link" style="color: white;"><span
                                    class="fa fa-paper-plane mr-3"></span>Log
                                out</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            @yield('content')
        </div>
    </div>

    <script src="../../sidebar/js/jquery.min.js"></script>
    <script src="../../sidebar/js/popper.js"></script>
    <script src="../../sidebar/js/bootstrap.min.js"></script>
    <script src="../../sidebar/js/main.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>

    <script text="javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>
</body>

</html>
