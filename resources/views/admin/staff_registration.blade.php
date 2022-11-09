<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
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

          <div class="div_center">
                    <h2 class="h2">New Staff Registration</h2>

                    <form action="{{url('/add_staff')}}" method="POST">
                        
                        @csrf
                    
                        <label for="name">Full Name:</label>
                        <input type="text" name="name"><br>

                        <label for="gender">Gender:</label>
                        <input type="radio" id="male" name="gender" value="Male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="Female">
                        <label for="female">Female</label><br>

                        <label for="birthday">Date of Birth:</label>
                        <input type="date" id="birthday" name="birthday"><br>

                        <label for="qualification">Qualification:</label>
                        <input type="checkbox" id="degree" name="qualification[]" value="Degree">
                        <label for="degree"> Degree</label>
                        <input type="checkbox" id="diploma" name="qualification[]" value="Diploma">
                        <label for="diploma"> Diploma</label>
                        <input type="checkbox" id="cerificate" name="qualification[]" value="Cerificate">
                        <label for="cerificate"> Cerificate</label>
                        <input type="checkbox" id="following" name="qualification[]" value="Following">
                        <label for="following"> Following</label><br>

                        <label for="achievements">Achievements:</label>
                        <input type="checkbox" id="district" name="achievements[]" value="World">
                        <label for="district"> World</label>
                        <input type="checkbox" id="national" name="achievements[]" value="National">
                        <label for="national"> National</label>
                        <input type="checkbox" id="provincial" name="achievements[]" value="Provincial">
                        <label for="provincial"> Provincial</label>
                        <input type="checkbox" id="district" name="achievements[]" value="District">
                        <label for="district"> District</label>
                        <input type="checkbox" id="no" name="achievements[]" value="No">
                        <label for="no"> No</label><br>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email"><br>

                        <label for="address">Address:</label>
                        <input type="textarea" id="address" name="address"><br>

                        <label for="address">Phone:</label>
                        <input type="number" id="phone" name="phone"><br>

                        <label for="joindate">Join Date:</label>
                        <input type="date" id="joindate" name="joindate"><br>

                        <label for="position">Position:</label>
                        <input type="radio" id="senior" name="position" value="Senior Fitness Instructor">
                        <label for="senior"> Senior Fitness Instructor</label>
                        <input type="radio" id="general" name="position" value="Fitness Instructor">
                        <label for="general"> Fitness Instructor</label><br>
                        <!-- <label for="cv">CV or Resume:</label>
                        <input type="file" id="myFile" name="filename"><br> -->

                        <!-- <label for="plan">Plan:</label>
                        <select name="customselect" id="inputGroupSelect01">
                            
                            <option value="pro">PRO</option>
                            <option value="premium">PREMIUM</option>
                            <option value="master">MASTER</option>
                            <option value="oneday">One-Day</option>
                        </select><br> -->

                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        <input type="reset" class="btn btn-primary" name="reset" value="Reset"><br>

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