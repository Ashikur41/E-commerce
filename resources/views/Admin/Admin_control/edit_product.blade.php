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
            h1 {
    
                text-align: center;
                font-size: 40px;
            }
            form {
                  
                }
                .row {
                    width: 132%;
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
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ session()->get('message') }}
                    </div>
                  @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h1>Update Product</h1>
                                    <form action="{{ url('update_product',$product->id) }}" method="get" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div>
                                            <label for="category_name">Category Name</label>
                                            <select name="category_name" class="form-control" >
                                                <option value="{{ $product->category_name ?? "null"}}" selected="">{{ $product->category_name}}</option>

                                                @foreach ($categorys as $category)
                                                <option value="{{ $category->add_category ?? "null"}}">{{ $category->add_category}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div >
                                            <label for="product_name">Product Name</label>
                                            <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}" placeholder="Product Name">
                                        </div>
                                        <div>
                                            <label for="product_title">Product Title</label>
                                            <input type="text" class="form-control" name="product_title" value="{{ $product->product_title }}" placeholder="Product title">
                                        </div>
                                        <div>
                                            <label for="product_description">Product Description</label>
                                            <input type="text" class="form-control" name="product_description" value="{{ $product->product_description }}" placeholder="Product description">
                                        </div>
                                        <div>
                                            <label for="product_quantity">Product Quantity</label>
                                            <input type="number" class="form-control" name="product_quantity" value="{{ $product->product_quantity }}" placeholder="Product quantity">
                                        </div>
                                        <div>
                                            <label for="product_price">Product Price</label>
                                            <input type="number" class="form-control" name="product_price" value="{{ $product->product_price }}" placeholder="Product price">
                                        </div>
                                        <div>
                                            <label for="discount_price">Discount Price</label>
                                            <input type="number" class="form-control" name="discount_price" value="{{ $product->discount_price }}" placeholder="Discount Price">
                                        </div><br/>

                                        <div>
                                            <label for="image">Changes Product Image</label>
                                            <img style="margin: auto" width="100" height="100" src="/product/{{ $product->image }}" alt="">
                                        </div><br/>


                                        <div>
                                            <label for="image">Product Image</label>
                                            <input type="file" name="image" value="{{ $product->image }}" >
                                        </div>
                                        <div>
                                            <input type="submit" class="btn btn-success" value="Update product" >
                                        </div>
                                    </form>
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