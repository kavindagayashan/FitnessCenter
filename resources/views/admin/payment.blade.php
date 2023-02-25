<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .title{
            text-align:center;
            font-size:25px;
            font-weight: bold;
            padding-bottom: 20px;
        }

        
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->


        <div class="main-panel">
             <div class="content-wrapper">
                <h1 class="title">Payments</h1>


                <div style="padding-left:400px; padding-bottom:30px;">
                    <form action="{{url('search')}}" method="get">
                        @csrf
                        <input type="text" name="search" placeholder="Search here">
                        <input type="submit" value="Search" class="btn btn-outline-primary">
                    </form>
                </div>

                <div class="table-responsive">
                <table style="margin:auto" class="table">
    <thead>
    <tr>
      <th style="color:white; font-size: 18px" >User Id</th>
      <th style="color:white; font-size: 18px" >Name</th>
      <th style="color:white; font-size: 18px" >Email</th>
      <th style="color:white; font-size: 18px" >Package Id</th>
      <th style="color:white; font-size: 18px" >Package Title</th>
      <th style="color:white; font-size: 18px" >Amount</th>
      <th style="color:white; font-size: 18px" >Payment Status</th>
      <th style="color:white; font-size: 18px" >Status</th>
      <th style="color:white; font-size: 18px" >Image</th>
      <th style="color:white; font-size: 18px" >Confirmed</th>
      <th style="color:white; font-size: 18px" >Print PDF</th>

    </tr>
    </thead>
     <tbody>

  @foreach($payment as $payment)
    <tr>
      
      <td style="color:darkgray;font-size: 16px">{{$payment->user_id}}</td>
      <td style="color:darkgray;font-size: 16px">{{$payment->name}}</td>
      <td style="color:darkgray;font-size: 16px">{{$payment->email}}</td>
      <td style="color:darkgray;font-size: 16px">{{$payment->package_id}}</td>
      <td style="color:darkgray;font-size: 16px">{{$payment->title}}</td>
      <td style="color:darkgray;font-size: 16px">Rs: {{$payment->price}}</td>
      <td><span style="font-size: 15px" class="badge badge-success">{{$payment->payment_status}}</span></td>
      <td><span style="font-size: 15px" class="badge badge-danger">{{$payment->confirmation_status}}</span></td>
      <!-- <td style="color:darkgray; font-size: 16px">{{$payment->payment_status}}</td>  <span class="badge badge-secondary">New</span></h3> -->
      <td>
        <img src="/package/{{$payment->image}}" alt="">
      </td>

      <td>

      @if($payment->confirmation_status=='Pending')
       
      <a href="{{url('confirmed',$payment->id)}}" onclick="return confirm('Are you sure to confirm the payment')" class="btn btn-primary">Confirmed</a>
      
    @else

    <p><span style="font-size: 15px" class="badge badge-success">Confirmed</span></p>

    @endif

        </td>
        <td>
            <a href="{{url('print_pdf',$payment->id)}}" class="btn btn-secondary">Print PDF</a>

        </td>
    </tr>
    
    @endforeach
  </tbody>
</table>
</div>


            </div>
        </div>







    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>