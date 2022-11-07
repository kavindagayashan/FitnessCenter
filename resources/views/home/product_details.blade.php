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
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <!-- <div class="hero_area"> -->
         <!-- header section strats -->
      @include('home.header')
         <!-- end header section -->
         
      <!-- </div> -->
      <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto; width:50%; padding: 30px">
                  <div class="box">
                     <!-- <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details')}}" class="option1">
                           More Details
                           </a>
                           <a href="" class="option2">
                           Register
                           </a>
                        </div>
                     </div> -->
                     <div class="img-box">
                        <img src="images/pro.jpg" alt="pro picture"><br><br>
                     </div>
                     <div class="detail-box">
                        <h5>
                           <b>PRO Packages</b>
                        </h5>
                        <h6>
                           <b>Starts from Rs: 1499</b><br><br>
                           <b>Annual : </b>Per Month Rs: 1499<br>
                           <b>6 Months : </b> Per Month Rs: 1999<br>
                           <b>3 Months  : </b> Per Month Rs: 2333<br>
                           <b>Monthly : </b>Per Month Rs: 2999<br>
                        </h6>
                     </div>
                     <h4> </h4>
                  </div>
               </div>
      <!-- footer start -->
      
      @include('home.footer')
      <!-- footer end -->

      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By Future Fitness (Pvt) Ltd<br>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>