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

      <style type ="text/css">
            .center{
                margin:auto;
                width:50%;
                text-align:center;
                padding:100px;
            }

            table,th,td{
                border:1px solid grey;
            }

            th{
                font-size:30px;
                paddin: 5px;
            }

      </style>

   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
      @include('home.header')
         <!-- end header section -->
      
      
     
      <div class="center">
        <table>
            <tr>
                <th>Title</th>
                <th>Package ID</th>
                <th>Action</th>
                <!-- <th></th> -->
            </tr>

            <?php $totalprice=0;    ?>

                @foreach($cart as $cart)
            <tr>
                <td>{{$cart->title}}</td>
                <td>{{$cart->package_id}}</td>
                <td><a class="btn btn-danger" onclick="return confirm('Are you sure to remove your selected package?')" href="{{url('/remove_cart',$cart->id)}}">Remove</a></td>

            </tr>

           

                @endforeach
        </table>
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