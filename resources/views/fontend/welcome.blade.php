<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
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
      @include('fontend.home.css');
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('fontend.home.header');
         <!-- end header section -->
         <!-- slider section -->
         @include('fontend.home.slider');
         <!-- end slider section -->
      </div>
      <!-- why section -->
      @include('fontend.home.why');
      <!-- end why section -->
      
      <!-- arrival section -->
      @include('fontend.home.arrival');
      <!-- end arrival section -->
      
      <!-- product section -->
      @include('fontend.home.product');
      <!-- end product section -->

      <!-- subscribe section -->
      @include('fontend.home.subscribe');
      <!-- end subscribe section -->
      <!-- client section -->
      @include('fontend.home.client');
      <!-- end client section -->
      <!-- footer start -->
      @include('fontend.home.footer');
      <!-- footer end -->
      @include('fontend.home.copyright');
      <!-- jQery -->
      @include('fontend.home.script');
   </body>
</html>