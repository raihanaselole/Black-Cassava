<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Antri Klinik - Black Cassava</title>
    <!-- Favicon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/css/icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.0.3/src/css/icons.min.css">
    <!-- Phosphor Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.0.3/src/css/icons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">

    <link rel="shortcut icon" href="{{ asset('admin/images/logo.png')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css')}}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('admin/css/file-upload.css')}}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('admin/css/plyr.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <!-- full calendar -->
    <link rel="stylesheet" href="{{ asset('admin/css/full-calendar.css')}}">
    <!-- jquery Ui -->
    <link rel="stylesheet" href="{{ asset('admin/css/jquery-ui.css')}}">
    <!-- editor quill Ui -->
    <link rel="stylesheet" href="{{ asset('admin/css/editor-quill.css')}}">
    <!-- apex charts Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/apexcharts.css')}}">
    <!-- calendar Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/calendar.css')}}">
    <!-- jvector map Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/jquery-jvectormap-2.0.5.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('admin/css/main.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    
</head> 
<body>
    
<!--==================== Preloader Start ====================-->
<!--==================== Sidebar Overlay End ====================-->

    <!-- ============================ Sidebar Start ============================ -->

    @include('components.sidebar')  
<!-- ============================ Sidebar End  ============================ -->

    <div class="dashboard-main-wrapper">
        <div class="top-navbar flex-between gap-16">

            @include('components.navbar')
</div>
        <div class="dashboard-body">
            {{$page_content}}
        </div>
        @include('components.footer')
    </div>
    
        <!-- Jquery js -->
    <script src="{{ asset('admin/js/jquery-3.7.1.min.js')}}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('admin/js/boostrap.bundle.min.js')}}"></script>
    <!-- Phosphor Js -->
    <script src="{{ asset('admin/js/phosphor-icon.js')}}"></script>
    <!-- file upload -->
    <script src="{{ asset('admin/js/file-upload.js')}}"></script>
    <!-- file upload -->
    <script src="{{ asset('admin/js/plyr.js')}}"></script>
    <!-- dataTables -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <!-- full calendar -->
    <script src="{{ asset('admin/js/full-calendar.js')}}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('admin/js/jquery-ui.js')}}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('admin/js/editor-quill.js')}}"></script>
    <!-- apex charts -->
    <script src="{{ asset('admin/js/apexcharts.min.js')}}"></script>
    <!-- Calendar Js -->
    <script src="{{ asset('admin/js/calendar.js')}}"></script>
    <!-- jvectormap Js -->
    <script src="{{ asset('admin/js/jquery-jvectormap-2.0.5.min.js')}}"></script>
    <!-- jvectormap world Js -->
    <script src="{{ asset('admin/js/jquery-jvectormap-world-mill-en.js')}}"></script>
    
    <!-- main js -->
    <script src="{{ asset('admin/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

    
    
    </body>
</html>