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
              h5.add_design {
                  font-size: 25px;
                  text-align: center;
                  border-radius: 10px;
                  background-color: moccasin;
              }

              .category {
                      padding: 6px;
                      width: 50%;
                      margin-left: 40px;
                        }
              .category_title{
                      padding: 6px;
                      width: 50%;
                      margin-left: 40px;
              }
              .category_description{
                      padding: 6px;
                      width: 50%;
                      margin-left: 40px;
              }
              .category_image{
                      padding: 6px;
                      width: 50%;
                      margin-left: 40px;
              }          
              input.add {
                      padding: 10px;
                      width: 100%;
                        }  
                        .save {
                              padding: 7px;
                              width: 30%;
                          } 
              input.btn.btn-success {
                    padding: 10px;
                    width: 100%;
                    margin-left: -14px;
                }
              i.fa-solid.fa-trash {
                    font-size: 15px;
                }   
                tr.justify-content-center {
                      background-color: khaki;
                  }  
                  .wrepper {
                        width: 980px;
                    } 
                    img.img_size {
                              width: 70px;
                              height: 70px;
                          }           
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
              @if (session()->has('message'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                  {{ session()->get('message') }}
              </div>
            @endif
          <h5 class="add_design">Create Category</h5>
          <form action="{{ url('/add_category') }}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="category">
                <label for="add_Category">Add Category</label>
                  <input type="text" class="add" name="add_category" placeholder="Add Category"><br><br>
                  @error('add_category')
                      <div class="alert alert-info">{{ $message }}</div>
                  @enderror
              </div>
              <div class="category_title">
                <label for="category_title">Category Title</label>
                <input type="text"  name="category_title">
              </div>
              <div class="category_description">
                <label for="category_description">Category Description</label>
                <textarea type="text" class="description"  name="category_description"></textarea>
              </div>
              <div class="category_image">
                <label for="category_Image">Category Image</label>
                <input type="file"  name="image">
              <div class="save">
                  <input class="btn btn-success" type="submit" value="Add Category">
              </div>
          </form>
            <div class="wrepper">
              <table class="table table-bordered table-hover">
                <tr class="justify-content-center">
                  <th>Category Name</th>
                  <th>Category Title</th>
                  <th>Category Description</th>
                  <th>Category Image</th>
                  <th>Action</th>
                </tr>
                <tbody>
                  @foreach ($data as $data)
                    
                  
                  <tr>
                    <td>{{ $data->add_category }}</td>
                    <td>{{ $data->category_title }}</td>
                    <td>{{ $data->category_description }}</td>
                    <td>
                        <img class="img_size" src="/product/{{ $data->image }}" alt="">
                    </td>
                    <td>
                      <a onclick="return confirm('Are you Sure To Delete this')" class="btn btn-danger" href="{{ url('delete_category',$data->id) }}"><i class="fa-solid fa-trash"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
       
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @include('Admin.footer')
  <!-- plugins:js -->
       @include('Admin.script')
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
{{ url('backend') }}