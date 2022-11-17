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
        <style>
            .img_size{
                width: 100px;
                height: 100px;
            }
            .th_deg{
                background-color: rgba(201, 76, 76, 0.3);
            }
        </style>
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
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-16">
                        <div class="card">
                            <div class="card-body">
                                <h1>Show Product</h1>
                                <p>{{ $product->category_name }}</p>
                                <p>{{ $product->product_name }}</p>
                                <p>{{ $product->product_title }}</p>
                                <p>{{ $product->product_description }}</p>
                                <p>{{ $product->product_quantity }}</p>
                                <p>{{ $product->product_price }}</p>
                                <p>{{ $product->discount_price }}</p>
                                <p>
                                    <img style="margin: auto" width="100" height="100" src="/product/{{ $product->image }}" alt="">
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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