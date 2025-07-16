<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Edmate Learning Dashboard HTML Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets_private/images/logo/favicon.png')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/bootstrap.min.css')}}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/file-upload.css')}}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/plyr.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <!-- full calendar -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/full-calendar.css')}}">
    <!-- jquery Ui -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/jquery-ui.css')}}">
    <!-- editor quill Ui -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/editor-quill.css')}}">
    <!-- apex charts Css -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/apexcharts.css')}}">
    <!-- calendar Css -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/calendar.css')}}">
    <!-- jvector map Css -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/jquery-jvectormap-2.0.5.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets_private/css/main.css')}}">
</head> 
<body>
    
<!--==================== Preloader Start ====================-->
  <div class="preloader">
    <div class="loader"></div>
  </div>
<!--==================== Preloader End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

    @yield('contenido')
    

        <!-- Jquery js -->
    <script src="{{ asset('assets_private/js/jquery-3.7.1.min.js')}}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('assets_private/js/boostrap.bundle.min.js')}}"></script>
    <!-- Phosphor Js -->
    <script src="{{ asset('assets_private/js/phosphor-icon.js')}}"></script>
    <!-- file upload -->
    <script src="{{ asset('assets_private/js/file-upload.js')}}"></script>
    <!-- file upload -->
    <script src="{{ asset('assets_private/js/plyr.js')}}"></script>
    <!-- dataTables -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <!-- full calendar -->
    <script src="{{ asset('assets_private/js/full-calendar.js')}}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('assets_private/js/jquery-ui.js')}}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('assets_private/js/editor-quill.js')}}"></script>
    <!-- apex charts -->
    <script src="{{ asset('assets_private/js/apexcharts.min.js')}}"></script>
    <!-- Calendar Js -->
    <script src="{{ asset('assets_private/js/calendar.js')}}"></script>
    <!-- jvectormap Js -->
    <script src="{{ asset('assets_private/js/jquery-jvectormap-2.0.5.min.js')}}"></script>
    <!-- jvectormap world Js -->
    <script src="{{ asset('assets_private/js/jquery-jvectormap-world-mill-en.js')}}"></script>
    
    <!-- main js -->
    <script src="{{ asset('assets_private/js/main.js')}}"></script>



    </body>
</html>