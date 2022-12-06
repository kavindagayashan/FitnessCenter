<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
      .div_center {
            text-align: center; 
            padding-top: 20px;
            /* padding-top: 20px; */
            text-align :center;
        }

        .h2 {
            padding-bottom: 20px;
            /* padding-top: 20px; */
        }

        /* label{
            display: inline-block;
            width: 100px;
        } */

        .div_design{
            padding-bottom:8px;
        }

       .sub_form{
            padding-top :10px;
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
                    <h2 class="h2">New Staff Registration</h2>

                    <form action="{{url('/add_staff')}}" method="POST">
                        
                        @csrf
                    <div class="div_design">
                        <label for="name">Full Name:</label>
                        <input class="input_color" type="text" name="name" required=""><br>
                    </div>

                    <div class="div_design">
                        <label for="gender">Gender:</label>
                        <input type="radio" id="male" name="gender" value="Male" required="">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="Female" required="">
                        <label for="female">Female</label><br>
                    </div>

                    <div class="div_design">
                        <label for="birthday">Date of Birth:</label>
                        <input class="input_color" type="date" id="birthday" name="birthday" required=""><br>
                        </div>

                        <div class="div_design">
                        <label for="qualification">Qualification:</label>
                        <input class="input_color" type="checkbox" id="degree" name="qualification[]" value="Degree" >
                        <label for="degree"> Degree</label>
                        <input class="input_color" type="checkbox" id="diploma" name="qualification[]" value="Diploma" >
                        <label for="diploma"> Diploma</label>
                        <input class="input_color" type="checkbox" id="cerificate" name="qualification[]" value="Cerificate" >
                        <label for="cerificate"> Cerificate</label>
                        <input class="input_color" type="checkbox" id="following" name="qualification[]" value="Following" >
                        <label for="following"> Following</label><br>
                        </div>

                        <div class="div_design">
                        <label for="achievements">Achievements:</label>
                        <input type="checkbox" id="district" name="achievements[]" value="World" >
                        <label for="district"> World</label>
                        <input type="checkbox" id="national" name="achievements[]" value="National" >
                        <label for="national"> National</label>
                        <input type="checkbox" id="provincial" name="achievements[]" value="Provincial">
                        <label for="provincial"> Provincial</label>
                        <input type="checkbox" id="district" name="achievements[]" value="District" >
                        <label for="district"> District</label>
                        <input type="checkbox" id="no" name="achievements[]" value="No" >
                        <label for="no"> No</label><br>
                        </div>

                        <div class="div_design">
                        <label for="email">Email:</label>
                        <input class="input_color" type="email" id="email" name="email" required=""><br>
                        </div>

                        <div class="div_design">
                        <label for="address">Address:</label>
                        <input class="input_color"type="textarea" id="address" name="address" required=""><br>
                        </div>

                        <div class="div_design">
                        <label for="address">Phone:</label>
                        <input class="input_color" type="number" id="phone" name="phone" required=""><br>
                        </div>

                        <div class="div_design">
                        <label for="joindate">Join Date:</label>
                        <input class="input_color" type="date" id="joindate" name="joindate" required=""><br>
                        </div>

                        <div class="div_design">
                        <label for="position">Position:</label>
                        <input class="input_color" type="radio" id="senior" name="position" value="Senior Fitness Instructor" required="">
                        <label for="senior"> Senior Fitness Instructor</label>
                        <input class="input_color" type="radio" id="general" name="position" value="Fitness Instructor" required="">
                        <label for="general"> Fitness Instructor</label><br>
                        </div>
                        <!-- <label for="cv">CV or Resume:</label>
                        <input type="file" id="myFile" name="filename"><br> -->

                        <!-- <label for="plan">Plan:</label>
                        <select name="customselect" id="inputGroupSelect01">
                            
                            <option value="pro">PRO</option>
                            <option value="premium">PREMIUM</option>
                            <option value="master">MASTER</option>
                            <option value="oneday">One-Day</option>
                        </select><br> -->
                      <div class="sub_form">
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
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