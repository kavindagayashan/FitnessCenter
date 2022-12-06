<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

        <style>
            .center{
                margin: auto;
                width: 100%;
                text-align: center;
                margin-top:20px;
                border: 2px solid white;
            }

            .center .tr .td{
                font-size: 16px;
            }
            .staff{
              font-size:30px;
              text-align:center;
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

          @if(session()->has('message'))

            <div class = "alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                {{session()->get('message')}}

            </div>

            @endif

        <h2 class="staff"><b>Staff</b></h2>
        <table class="center">
            <tr>
                <td>Member ID</td>
                <td>Name</td>
                <td>Gender</td>
                <td>Date of Birth</td>
                <td>Email</td>
                <td>Address</td>
                <td>Phone</td>
                <td>Join Date</td>
                <!-- <td>Plan</td> -->
                <td>Action</td>
            </tr>
            @foreach($data as $data)
            <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->Name}}</td>
            <td>{{$data->Gender}}</td>
            <td>{{$data->Date_of_Birth}}</td>
            <td>{{$data->Email}}</td>
            <td>{{$data->Address}}</td>
            <td>{{$data->Phone}}</td>
            <td>{{$data->Join_Date}}</td>
            <!-- <td>{{$data->Plan}}</td> -->
            <td><a onclick="return confirm('Do you want to delete staff record')" class="btn btn-danger"href="{{url('delete_staff',$data->id)}}">Delete</a></td>
            </tr>
            @endforeach
        </table>



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