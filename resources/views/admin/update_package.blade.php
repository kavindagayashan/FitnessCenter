<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
    @include('admin.css')

    <style>
        .div_center{
            text-align:center;
            padding-top:15px;
        }

        .font_size{
            padding-bottom:15px;
            font-size:30px;
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
        .input_color{
            color:black;
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
                    <h2 class="font_size"><b>Update Package</b></h2>

                 <form class="form" action="{{url('/update_package_confirm',$package->id)}}" method="POST" enctype="multipart/form-data">


                 @csrf
                    <div  class="div_design">
                        <label style="padding-top:30px">Package Title :</label>
                       <input class="input_color" type="text" name="title" required="" value="{{$package->title}}">
                    </div>
                    <div class="div_design">
                        <label>Package Description :</label>
                       <input class="input_color" type="text" name="description" value="{{$package->description}}">
                    </div>
                    <div class="div_design">
                        <label>Monthly Package :</label>
                       <input class="input_color" type="number" name="monthly" min="0" value="{{$package->monthly}}">
                    </div>
                    <div  class="div_design">
                        <label>3 Months Package :</label>
                       <input class="input_color" type="number" name="month3" min="0" value="{{$package->months_3}}">
                    </div>
                    <div  class="div_design">
                        <label>6 Months Package :</label>
                       <input class="input_color" type="number" name="month6" min="0" value="{{$package->months_6}}">
                    </div>
                    <div  class="div_design">
                        <label>Annual Package :</label>
                       <input class="input_color" type="number" name="annual" min="0" value="{{$package->annual}}">
                    </div>
                    <div  class="div_design">
                        <label>Day Entry :</label>
                       <input class="input_color" type="number" name="day" min="0" value="{{$package->day_entry}}">
                    </div>
                    <div class="div_design">
                        <label>Note:</label>
                       <input class="input_color" type="text" name="note" value="{{$package->note}}">
                    </div>

                    <div  class="div_design">
                        <label>Current Image :</label>
                       
                       <img style="margin:auto" src="/package/{{$package->image}}" height="50" width="150">
                    </div>

                    <div  class="div_design">
                        <label>Change Image :</label>
                       <input type="file" name="image" >
                    </div>
                    
                    <div class="sub_form">
                        <input type="submit" class="btn btn-primary" name="submit" value="Update ">
                     
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