<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/backend')}}/assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>

	@yield('css')
   
    <!-- Custom CSS -->
    <link href="{{asset('/backend')}}/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/backend')}}/dist/css/style.min.css" rel="stylesheet">
    <link href="{{asset('/backend')}}/dist/css/custom.css" rel="stylesheet">
	  <!-- Dashboard 1 Page CSS -->
    <link href="{{asset('/backend')}}/dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-blue fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Multi School</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        @include('backend.layouts.header')
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
         @include('backend.layouts.leftsidebar')
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
 
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
		@yield('content')
        <!-- End Page wrapper  -->
		@include('backend.layouts.rightsidebar')
        <!-- footer -->
	
        <footer class="footer">
            © 2019 Eliteadmin by themedesigner.in
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->

    <script src="{{asset('/backend')}}/assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{asset('/backend')}}/assets/node_modules/popper/popper.min.js"></script>
    <script src="{{asset('/backend')}}/assets/node_modules/bootstrap/{{asset('/backend')}}/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('/backend')}}/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="{{asset('/backend')}}/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{asset('/backend')}}/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('/backend')}}/dist/js/custom.min.js"></script>
    <!-- ============================================================== -->

	@yield('js')
</body>
</html>