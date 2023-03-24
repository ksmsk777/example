<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
 {{--   <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">--}}
{{--    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">--}}
   {{-- <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">--}}
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    {{--<!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">--}}


    <style>


        /* first reset some of the elements for browser compatibility */
        body,h1,h2,h3,p,td,quote,small,form,input,ul,li,ol,label{
            margin:0px;
            padding:0px;
            /*font-family:Arial, Helvetica, sans-serif;*/
        }
        body{


            /* body */
            /* margin-top:20px;*/
            /*color:white;
            font-size:13px;*/
            /* background-color:#222222;*/
        }




        .hBlock {

            display: none;


        }








        .clear{	/* clearfix ÐºÐ»Ð°ÑÑ */
            clear:both;
        }
        a, a:visited {
            color:#00BBFF;
            text-decoration:none;
            outline:none;
        }
        a:hover{
            text-decoration:underline;
        }
        #container{
            width:95%;
            margin:30px ;
        }
        #heading,#footer{
            /*background-color:#2A2A2A;
             border:1px solid #444444;*/
            height: 13px;
            padding: 4px 0 0px 0px;
            margin-bottom: 0px;
            overflow: hidden;
        }
        #footer{
            height: 0px;
            margin: 0px 0 0px 0;
            padding: 0px 0 0px 9px;
        }
        div.nomargin{	/* nomargin ÐºÐ»Ð°ÑÑ */
            margin-right:0px;
        }

        .pic {
            float: left;
            /* border: 3px solid white; */
            border-radius: 8px;
            width: 20%;
            height: 220px;
            margin: 0px 7px 29px 21px;
            box-shadow: 1px 1px 4px #aaa;
            /*background-size: 122%;*/
        }

        .pic:hover {

            box-shadow: 1px 1px 4px #eee;

        }


        .pic a{

            width: 100%;
            height: 260px;
            text-indent:-99999px;
            display:block;
        }
        /*
      h1{
        font-size:28px;
        font-weight:bold;
        font-family:"Trebuchet MS",Arial, Helvetica, sans-serif;
        }
      h2{
        font-weight:normal;
        font-size:14px;
        color:white;
        }
      */

        .heading_foto{
            height: 50px;
            margin: 0px 0px 21px 18px;
        }




        @media (max-width: 360px) {
            .pic{

                width:45%;
                height:200px;
            }
            .pic a{
                width:100%;
                height:200px;
            }


        }
        .text   {  text-align: center;
            color: white;
            text-transform: uppercase;
            font-weight: bold; }



        @media (max-width: 375px) {
            .pic{

                width:45%;
                height:200px;
                /* background-size: 142%;*/
            }
            .pic a{
                width:100%;
                height:200px;
            }
            .menu-c {visibility: hidden;}

        }

        @media (max-width: 410px) {
            .pic{

                width: 31%;
                height: 120px;
                margin: 0px 1px 8px 5px;
                /* background-size: 142%;*/
            }
            .pic a{
                width: 100%;
                height: 120px;
                margin: 0px 1px 8px 5px;
            }

            #container {
                width: 100%;
                margin: 0;}

            .blok1 {visibility: hidden;}
            .menu-c {visibility: hidden;}
            .text   {  text-align: left}



            .heading_foto {
                height: 19px;

            }


        }



        button:active{

            color:#fff;
        }


        button:focus{
            background:#c1192c;
        }

        .active, .btn:hover {

            color: white;
        }




    </style>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

        </ul>

        <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/task" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>


    </aside>

    <!-- Content Wrapper. Contains page content -->


    @yield('content')


    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2023 <a href="#">PHP learning</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
{{--<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script> --}}
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
{{--<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>--}}
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
{{--<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>--}}
</body>
</html>
