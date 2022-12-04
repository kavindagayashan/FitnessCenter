<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .div_center{
            text-align:center;
            padding-top:15px;
        }

        .font_size{
            padding-bottom:15px;
        }
        label{
            width:200px;
            display: inline-block;
        }
        .div_design{
            padding-bottom:5px;
        }
        .sub_form{
            padding-top :10px;
            margin-bottom:15px;
        }
        .form{
            border:2px solid white;
           /* margin-left:200px; */
           /* width:90%; */
           
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
             
            <div class="div_center">
                    <h2 class="font_size">Add Package</h2>

                 <form class="form" action="{{url('/add_package')}}" method="POST" enctype="multipart/form-data">


                 @csrf
                    <div  class="div_design">
                        <label>Package Title :</label>
                       <input type="text" name="title" required="">
                    </div>
                    <div class="div_design">
                        <label>Package Description :</label>
                       <input type="text" name="description" >
                    </div>
                    <div class="div_design">
                        <label>Monthly Package :</label>
                       <input type="number" name="monthly" min="0" >
                    </div>
                    <div  class="div_design">
                        <label>3 Months Package :</label>
                       <input type="number" name="month3" min="0">
                    </div>
                    <div  class="div_design">
                        <label>6 Months Package :</label>
                       <input type="number" name="month6" min="0">
                    </div>
                    <div  class="div_design">
                        <label>Annual Package :</label>
                       <input type="number" name="annual" min="0">
                    </div>
                    <div  class="div_design">
                        <label>Day Entry :</label>
                       <input type="number" name="day" min="0" >
                    </div>
                    <div class="div_design">
                        <label>Note:</label>
                       <input type="text" name="note" >
                    </div>
                    <div  class="div_design">
                        <label>Image :</label>
                       <input type="file" name="image" >
                    </div>
                    
                    <div class="sub_form">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add ">
                        <input type="reset" class="btn btn-primary" name="reset" value="Reset"><br>
                    </div>
    </form>
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