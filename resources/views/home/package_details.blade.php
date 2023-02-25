<!DOCTYPE html>
<html>
   <head>
      <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/101.png" type="">
      <title>Future Fitness (Pvt) Ltd</title>
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
      <div class="hero_area">
         <!-- header section strats -->
      @include('home.header')
         <!-- end header section -->
         
      
      <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto;width:50%;padding:30px">
                  <!-- <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('package_details',$package->id)}}" class="option1">
                           More Details
                           </a>
                           <a href="" class="option2">
                           Register
                           </a>
                        </div>
                     </div> -->
                     <div class="img-box" style="padding-bottom:30px">
                        <img src="package/{{$package->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$package->title}}
                        </h5>
                        
                        <h6>
                          <b> {{$package->description}}</b>
                        </h6>
                        <!-- <h6> <b>Package Price: Rs. </b>
                           {{$package->price}}
                        </h6>
                        
                        <h6> <b>Discount Price : Rs. </b>
                           {{$package->discount_price}}
                        </h6>
                        <h6><b>6 Months Package : Rs. </b>
                           {{$package->months_6}}
                        </h6>
                        <h6><b>Annual Package : Rs. </b>
                           {{$package->annual}}
                        </h6>
                        @if($package->day_entry!=null)
                        <h6><b>Day Entry :  Rs. </b>
                           {{$package->day_entry}}
                        </h6>
                        @endif -->
                        @if($package->discount_price!=null)
                        <h6 style="color:red">
                        <b>Discount price<br>
                           Rs: {{$package->discount_price}}</b>
                        </h6>

                        <h6 style="text-decoration: line-through; color:blue"><b>Price<br>
                           Rs: {{$package->price}}</b>
                        </h6>

                        @else
                        <h6 style="color:blue">Price<br> Rs: {{$package->price}}
                        </h6>

                        @endif

                        @if($package->special_info!=null)

                        <h6 ><b>Special Info :</b>
                           {{$package->special_info}}
                        </h6>

                        <h6 ><b>Note :</b>
                           {{$package->note}}

                        @else

                        <!-- <h6>Special Info : -
                           {{$package->info}}
                        </h6> -->

                        <h6>Note :
                           {{$package->note}}
                        </h6>

                        @endif

                        <!-- <a href="" class="btn btn-primary">Add to Cart</a> -->
                        <form action="{{url('add_cart',$package->id)}}" method="Post">
                              @csrf
                              <div class="col-md-4" style="padding-top:20px">
                              <input type="submit" value="Register">
                              </div> 
                           </form>
                     </div>
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