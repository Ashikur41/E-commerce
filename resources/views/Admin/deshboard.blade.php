<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Salt Admin</title>
  <!-- plugins:css -->
        @include('Admin.css')
</head>
<body class="sidebar-dark">
  <!-- partial:partials/_settings-panel.html -->
   @include('Admin.partials')
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
        @include('Admin.nav')
        <!-- partial:partials/_sidebar.html -->
         @include('Admin.slider')
        <!-- partial -->
        @include('Admin.body')
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        @include('Admin.footer')
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
       @include('Admin.script')
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
{{ url('backend') }}