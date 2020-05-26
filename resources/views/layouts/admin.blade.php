<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Tomini Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ url('/backend/assets/images/favicon.ico') }}">

        @include('includes.admin.style')

    </head>

    <body data-layout="horizontal">
        
         @include('includes.admin.navbar')

        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">

                @yield('content')

                @include('includes.admin.footer')
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->
        
        @include('includes.admin.script')
        
    </body>

</html>