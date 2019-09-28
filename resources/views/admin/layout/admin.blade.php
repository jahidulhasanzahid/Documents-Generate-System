<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('contents/admin')}}/assets/images/favicon.png">
    <title>Admin Laravel</title>
    <link href="{{asset('contents/admin')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/css/adminpress.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/css/colors/blue.css" id="theme" rel="stylesheet">
    <script src="{{asset('contents/admin')}}/assets/plugins/jquery/jquery.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/sweetalert.min.js"></script>

</head>

<body class="fix-header fix-sidebar card-no-border">
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('/backend/welcome')}}">
                        <b>
                            <img src="{{asset('contents/admin')}}/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <img src="{{asset('contents/admin')}}/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span>
                            <img src="{{asset('contents/admin')}}/assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <img src="{{asset('contents/admin')}}/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                </div>
            </nav>
            <form id="logout-form" action="Logout" method="POST" style="display: none;">
                @csrf
            </form>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <div class="user-profile">
                    <div class="profile-img"> <img src="{{asset('contents/admin')}}/assets/images/users/profile.png" alt="user" />
                        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                    </div>
                    <div class="profile-text">
                        <h5>Name</h5>
                        <a href="index.html#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="index.html#" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <a href="index.html#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a href="" class="dropdown-item">
                                <form class="" action="{{ route('admin.logout') }}" method="post">
                                          @csrf
                                          <input type="submit" value="Logout Now" class="btn btn-danger">
                                </form>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="sidebar-nav">
                    <ul>
                        <li><a href="{{url('/backend')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="collapse" href="#ui-basicone" aria-expanded="false" aria-controls="ui-basic">
                                <i class="fa fa-user-circle"></i>
                                <span class="menu-title">Users</span>
                                <i class="menu-arrow"></i>
                                </a>
                            <div class="collapse" id="ui-basicone">
                                <ul class="nav flex-column sub-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('/backend/user')}}">Manage User Information</a>
                                    </li>
                                </ul>
                            </div>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="collapse" href="#ui-basictwo" aria-expanded="false" aria-controls="ui-basic">
                                        <i class="fa fa-user-circle"></i>
                                            <span class="menu-title">Users Post</span>
                                        <i class="menu-arrow"></i>
                                     </a>
                                    <div class="collapse" id="ui-basictwo">
                                        <ul class="nav flex-column sub-menu">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{url('/backend/user-post')}}">Manage Post Information</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="{{url('/backend/contact')}}"><i class="fa  fa-user-circle"></i>Contact</a></li>
                                <li>
                                    <a href="#">
                                        <form class="" action="{{ route('admin.logout') }}" method="post">
                                          @csrf
                                          <input type="submit" value="Logout Now" class="btn btn-danger">
                                        </form>
                                    </a>
                                </li>
                                

                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Dashboard</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
            <div class="container-fluid">
                @yield('contents')
            </div>
            <footer class="footer"> © 2019 Admin </footer>
        </div>
    </div>
    <script src="{{asset('contents/admin')}}/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/jquery.slimscroll.js"></script>
    <script src="{{asset('contents/admin')}}/js/waves.js"></script>
    <script src="{{asset('contents/admin')}}/js/sidebarmenu.js"></script>
    <script src="{{asset('contents/admin')}}/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/custom.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/plugins/raphael/raphael-min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/plugins/morrisjs/morris.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/dashboard1.js"></script>
    <script src="{{asset('contents/admin')}}/assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="{{asset('contents/admin')}}/js/custom.min.js"></script>
    <!-- This is data table -->
    <script src="{{asset('contents/admin')}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
</body>

</html>
