<!DOCTYPE html>
<html lang="en">
    @include('backend.layouts.head')
    <body>
	
		<!-- Main Wrapper -->

        <div class="main-wrapper">
		
			<!-- Header -->

            <div class="header">
                @include('backend.layouts.header')
            </div>

			<!-- /Header -->
			
			<!-- Sidebar -->

            <div class="sidebar" id="sidebar">
                @include('backend.layouts.sidebar')
            </div>

			<!-- /Sidebar -->
			
			<!-- Main content -->

            <div class="page-wrapper">
                
                <div class="content container-fluid">
                @yield('content')
                </div>

            <!-- /Main content -->

            <!-- Footer -->

            @include('backend.layouts.footer')
            </div>

            <!-- /Footer -->
		
        </div>

		<!-- /Main Wrapper -->
		

		<!-- jQuery -->
        <script src="assets/js/jquery-3.5.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Chart JS -->
		<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
		<script src="assets/plugins/apexchart/chart-data.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>