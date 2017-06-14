<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fashion Trend Nigeria') }}</title>


    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('adminassets/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('adminassets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{ asset('adminassets/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{ asset('adminassets/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('adminassets/css/animate.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('adminassets/css/style.css') }}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('adminassets/css/colors/default.css') }}" id="theme"  rel="stylesheet">

    <!-----Datatable CSS----->
    <script src="{{ asset('adminassets/plugins/bower_components/datatables/jquery.dataTables.min.css') }}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<!--<div class="preloader">-->
<!--    <div class="cssload-speeding-wheel"></div>-->
<!--</div>-->
<div id="wrapper">
    <!-- Navigation -->
    @include('admin.segments.topnavber')
    <!-- Left navbar-header -->
    @include('admin.segments.sidenavbar')
    <!-- Left navbar-header end -->
    <!-- Page Content -->
    @include('admin.segments.header')

    @yield('content')


    @include('admin.segments.footer')

    <!-- Scripts -->
<!-- jQuery -->
<script src="{{ asset('adminassets/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('adminassets/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('adminassets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
<!--slimscroll JavaScript -->
<script src="{{ asset('adminassets/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('adminassets/js/waves.js') }}"></script>
<!--Counter js -->
<script src="{{ asset('adminassets/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ asset('adminassets/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
<!--Morris JavaScript -->
<script src="{{ asset('adminassets/plugins/bower_components/raphael/raphael-min.js') }}"></script>
<script src="{{ asset('adminassets/plugins/bower_components/morrisjs/morris.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('adminassets/js/custom.min.js') }}"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{ asset('adminassets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('adminassets/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>
<script src="{{ asset('adminassets/js/dashboard1.js') }}"></script>
<!-- Sparkline chart JavaScript -->
<script src="{{ asset('adminassets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('adminassets/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') }}"></script>

<!--Style Switcher -->
<script src="{{ asset('adminassets/plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>

<!--Datatable JS --->
<script src="{{ asset('adminassets/plugins/bower_components/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminassets/plugins/bower_components/datatables/dataTables.bootstrap.js') }}"></script>

    <script src="{{ asset('adminassets/tinymce/js/jquery.tinymce.min.js') }}"></script>
    <script src="{{ asset('adminassets/tinymce/js/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify ' +
            '| bullist numlist outdent indent | link image',
            content_css: 'tinymce/css/tinymce.min.css'
        });
    </script>

    <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
            $(document).ready(function() {
                var table = $('#example').DataTable({
                    "columnDefs": [
                        { "visible": false, "targets": 2 }
                    ],
                    "order": [[ 2, 'asc' ]],
                    "displayLength": 5,
                    "drawCallback": function ( settings ) {
                        var api = this.api();
                        var rows = api.rows( {page:'current'} ).nodes();
                        var last=null;

                        api.column(2, {page:'current'} ).data().each( function ( group, i ) {
                            if ( last !== group ) {
                                $(rows).eq( i ).before(
                                    '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                                );

                                last = group;
                            }
                        } );
                    }
                } );

                // Order by the grouping
                $('#example tbody').on( 'click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
                        table.order( [ 2, 'desc' ] ).draw();
                    }
                    else {
                        table.order( [ 2, 'asc' ] ).draw();
                    }
                });
            });
        });
        $('#example23').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>

</body>

</html>
