<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .center{
            margin:auto;
            /* width:95%; */
            border:2px solid white;
            text-align: center;
            margin-top:20px;

        }
        .font_size{
            text-align:center;
        }

        .img_size{
            width:150px;
            height:50px;
        }
        .th_color{
            background:white;
        }
        .tr_color{
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

           <h2 class="font_size">All Packages</h2>
             <table class="center">
                <tr class ="th_color">
                    <th class="tr_color">Package Title</th>
                    <th class="tr_color">Package Description</th>
                    <th class="tr_color">Monthly (Rs)</th>
                    <th class="tr_color">3 Month Package (Rs) </th>
                    <th class="tr_color">6 Month Package (Rs)</th>
                    <th class="tr_color">Annual Package (Rs)</th>
                    <th class="tr_color">Day Entry (Rs)</th>
                    <th class="tr_color">Note </th>
                    <th class="tr_color">Details Image  </th>
                    <th class="tr_color">Delete </th>
                    <th class="tr_color">Edit  </th>
                    
                </tr>

                @foreach($package as $package)

                <tr>
                    <td>{{$package->title}}</td>
                    <td>{{$package->description}}</td>
                    <td>{{$package->monthly}}</td>
                    <td>{{$package->months_3}}</td>
                    <td>{{$package->months_6}}</td>
                    <td>{{$package->annual}}</td>
                    <td>{{$package->day_entry}}</td>
                    <td>{{$package->note}}</td>
                    <td>
                        <img class="img_size" src="/package/{{$package->image}}">
                    </td>
                    <td><a class="btn btn-danger" onclick="return confirm('Confirm the Delete Package')" href="{{url('delete_package', $package->id)}}">Delete</a></td>
                    <td><a class="btn btn-success" href="{{url('update_package',$package->id)}} ">Edit</a></td>
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