<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .div_center{
        text-align: center;
        padding-top: 20px;
        }

        .h2{
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

                <div class="div_center">
                    <h2 class="h2">New Registration</h2>

                    <form>
                        <label for="membership_id">Membership Id:</label>
                        <input type="text" name="membership_id"><br>

                        <label for="name">Name:</label>
                        <input type="name" name="name"><br>

                        <label for="gender">Gender:</label>
                        <input type="drop" id="gender" name="gender"><br>

                        <label for="birthday">Date of Birth:</label>
                        <input type="date" id="birthday" name="birthday"><br>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email"><br>

                        <label for="address">Address:</label>
                        <input type="textarea" id="address" name="address"><br>

                        <label for="address">Phone:</label>
                        <input type="number" id="phone" name="phone"><br>

                        <label for="joindate">Join Date:</label>
                        <input type="date" id="joindate" name="joindate"><br>

                        <label for="plan">Plan:</label>
                        <select name="custom-select" id="inputGroupSelect01" placeholder="Select">
                            <option selected>Select Plan</option>
                            <option value="pro">PRO</option>
                            <option value="premium">PREMIUM</option>
                            <option value="master">MASTER</option>
                            <option value="oneday">One-Day</option>
                        </select><br>

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
