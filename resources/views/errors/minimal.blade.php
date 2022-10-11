<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="404">

        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="{{asset('assets/template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <!-- Custom styles for this template-->
        <link href="{{asset('assets/template/css/sb-admin-2.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/template/css/IRANSansWeb.css')}}" rel="stylesheet">
    </head>
    <body id="page-top">



        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                    @yield('message')
                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('assets/template/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('assets/template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{asset('assets/template/js/sb-admin-2.min.js')}}"></script>
    </body>
</html>
