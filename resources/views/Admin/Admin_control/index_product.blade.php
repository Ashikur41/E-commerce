<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Salt Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <!-- plugins:css -->
        @include('Admin.css')
        <style>
            .img_size{
                width: 50px;
                height: 50px;
            }
            .th_deg{
                background-color: rgba(201, 76, 76, 0.3);
            }
            h1 {
                    text-align: center;
                    background-color: moccasin;
                    padding: 6px;
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
                                <h1>All Product</h1>
                                <table class="table table-bordered table-hover">
                                    <tr>
                                        <th class="th_deg">Category Name</th>
                                        <th class="th_deg">Product Name</th>
                                        <th class="th_deg">Product Title</th>
                                        <th class="th_deg">Product Description</th>
                                        <th class="th_deg">Product Quantity</th>
                                        <th class="th_deg">Product Price</th>
                                        <th class="th_deg">Discount Price</th>
                                        <th class="th_deg">Product Image</th>
                                        <th class="th_deg">View</th>
                                        <th class="th_deg">Delete</th>
                                        <th class="th_deg">Edit</th>
                                    </tr>
                                    <tbody>
                                        @foreach ($product as $product)
                                            
                                        
                                        <tr>
                                            <td>{{ $product->category_name }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{{ $product->product_title }}</td>
                                            <td>{{ $product->product_description }}</td>
                                            <td>{{ $product->product_quantity }}</td>
                                            <td>{{ $product->product_price }}</td>
                                            <td>{{ $product->discount_price }}</td>
                                            <td>
                                                <img class="img_size" src="/product/{{ $product->image }}" alt="">
                                            </td>
                                            <td>
                                                <a class="btn btn-primary" href="{{ url('show_product',$product->id) }}"><i class="fa-solid fa-street-view"></i></a>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger" onclick="return confirm('Are you sure Deleted This')" href="{{ url('delete_product',$product->id) }}"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                            <td>
                                                <a class="btn btn-success" href="{{ url('edit_product',$product->id) }}"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
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