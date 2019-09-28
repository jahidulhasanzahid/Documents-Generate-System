<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content=""
    />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DGS') }}</title>
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' media="all">
    <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet">
    <!-- Scripts -->
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
<body>
    <!--extra design navbar-->
    <!--navbar-->
    <section id="navbar">
        <nav class="navbar navbar-expand-md justify-content-center">
                <img class="navbar-brand mr-0" src="images/logo.png" style="height: 55px; width: auto;">
                <button class="navbar-toggler ml-1" type="button" data-toggle="collapse" data-target="#collapsingNavbar2" style="border: 1px solid green;">
                   <i class="fa fa-arrow-down" aria-hidden="true"></i>
                </button>
                <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
                    <ul class="navbar-nav mx-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link fonts" href="{{url('profile')}}">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fonts" href="{{url('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fonts" href="{{url('convert')}}">Convert</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link fonts" href="{{url('message')}}">Contact</a>
                        </li> 
                        
                    </ul>
                    <ul class="nav navbar-nav flex-row justify-content-center flex-nowrap">
                        <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Facebook"><a class="nav-link" href=""><i class="fa fa-facebook mr-1" aria-hidden="true"></i></a> </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Twitter"><a class="nav-link" href=""><i class="fa fa-twitter mr-1" aria-hidden="true"></i></a> </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Instragram"><a class="nav-link" href=""><i class="fa fa-instagram mr-1" aria-hidden="true"></i></a> </li>
                        <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Logout"><a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out mr-1" aria-hidden="true"></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                        
                    </ul>
                </div>
              </nav>
        </section>
    <!--navbar end-->
    <!--extra navbar end-->

    <!--extra main body part-->
        
        
        @yield('content')

    <!--extra main body part end-->
    <!--extra fooetr-->
    <footer class="copyrigh-wthree">
        <p>
            © 2019 DIU.All Rights Reserved|Design & Develop by
            <a href="https://www.jahidul.info/" target="_blank">Jahidul Hasan</a>
        </p>
    </footer>
    <!--extra footer end-->


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
