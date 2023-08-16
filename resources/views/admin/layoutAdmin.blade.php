 
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
   <meta content="Coderthemes" name="author">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- App favicon -->
   <!-- <link rel="shortcut icon" href="..\assets\images\favicon.ico"> -->

   <!-- App css -->
   <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
   <link href="{{asset('css/admin/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
   <link href="{{asset('css/admin/icons.min.css')}}" rel="stylesheet" type="text/css">
   <link href="{{asset('css/admin/app.min.css')}}" rel="stylesheet" type="text/css">

   <title>@yield('TieuDeTrang')</title>

   <style>
      /* Start Page Content here */
      .alert-success {
         background-color: #00acc2 !important;
         color: #fff !important;
         margin: 0;
         border: 0;
      }

      .box_prof {
         border: 1px solid gray;
         border-radius: 5px;
      }

      .box_form {
         padding: 23px;
      }

      .form_prof {
         margin: 12px 0;
         border: 1px solid gray;
         border-radius: 3px;
      }

      .form_prof .table tr:nth-child(2n+2) {
         background-color: #e7e7e7;
      }

      .form_prof .table td,
      form .table th {
         border: 1px solid #bdbdbd;
      }

      .navbar-custom {
         left: 180px;
      }

      .left-side-menu {
         width: 180px;
      }

      .content-page {
         margin-left: 180px;
      }


   </style>

</head>

<body>

   <!-- Begin page -->
   <div id="wrapper">

      <!-- Topbar Start -->
      @include('admin/inc/topbarAdmin')
      <!-- end Topbar -->

      <!-- ========== Left Sidebar Start ========== -->
      @include('admin/inc/leftsideAdmin')
      <!-- Left Sidebar End -->

      <!-- ============================================================== -->
      <!-- Start Page Content here -->
      <!-- ============================================================== -->

      <div class="content-page">
         <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

              @yield('NoiDung')
               
            </div> <!-- container-fluid -->

         </div> <!-- content -->



         <!-- Footer Start -->
         <footer class="footer">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6">
                     2018 - 2019 &copy; Simulor theme by <a href="">Coderthemes</a>
                  </div>
                  <div class="col-md-6">
                     <div class="text-md-right footer-links d-none d-sm-block">
                        <a href="#">About Us</a>
                        <a href="#">Help</a>
                        <a href="#">Contact Us</a>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end Footer -->

      </div>

      <!-- ============================================================== -->
      <!-- End Page content -->
      <!-- ============================================================== -->


   </div>
   <!-- END wrapper -->

   <!-- Right Sidebar -->
    @include('admin/inc/rightsideAdmin')
   <!-- Right-bar -->
   <!-- Right bar overlay-->
   <!-- <div class="rightbar-overlay"></div> -->

   <!-- Vendor js -->
   <script src="{{asset('js/vendor.min.js')}}"></script>
   <!-- Chart JS -->
   <script src="{{asset('libs/chart-js/Chart.bundle.min.js')}}"></script>
   <!-- Sparkline charts -->
   <script src="{{asset('libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
   <!-- Dashboard js -->
   <script src="{{asset('js/pages/dashboard.init.js')}}"></script>
   <!-- App js -->
   <script src="{{asset('js/app.min.js')}}"></script>

</body>

</html>