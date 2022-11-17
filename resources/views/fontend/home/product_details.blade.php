<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>E-Commerce</title>
      <!-- bootstrap core css -->
        <style>
                  img.pro-img {
                                width: 500px;
                             }
        </style>
      @include('fontend.home.css');
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('fontend.home.header');
         <!-- end header section -->
         <!-- slider section -->

         <!-- end slider section -->
     
      <!-- why section -->
      <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; w-50%; p-30px">
        <div class="box">
           <div class="option_container">
              
           </div>
           <div class="img-box" >
              <img class="pro-img" src="/product/{{ $product->image }} " alt="">
           </div>
           <div class="detail-box">
              <h5>
                 {{ $product->product_name }}
              </h5>

              @if($product->discount_price!=null)
              <h6 style="color: red">
                Discount Price
                <br>
                ${{ $product->discount_price }}
             </h6>

             <h6 style="text-decoration: line-through; color:blue">
                Price
                <br>
                ${{ $product->product_price }}
             </h6>
             

              @else
              <h6>
                Price
                <br>
                 ${{ $product->product_price }}
              </h6>
              @endif

              <h6>product category: {{ $product->category_name }}</h6>
              <h6>product title: {{ $product->product_title }}</h6>
              <h6>product description: {{ $product->product_description }}</h6>
              <h6>product quantity: {{ $product->product_quantity }}</h6>

              <a href="" class="btn btn-primary">Add To Card</a>

           </div>
        </div>
     </div>
      <!-- end client section -->
      <!-- footer start -->
      @include('fontend.home.footer');
      <!-- footer end -->
      @include('fontend.home.copyright');
      <!-- jQery -->
      @include('fontend.home.script');
   </body>
</html>