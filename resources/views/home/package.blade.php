<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>Packages</span>
               </h2>
            </div>
            <div class="row">

            @foreach($package as $packages )

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('package_details',$packages->id)}}" class="option1">
                           More Details
                           </a>
                           <!-- <a href="" class="option2">
                           Register
                           </a>  -->
                           <form action="{{url('add_cart',$packages->id)}}" method="Post">
                              @csrf
                              <div class = "col-md-4">
                                 

                              </div>

                              
                              <div class="col-md-4">
                              <input type="submit" value="Register">
                              </div> 
                           </form>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="package/{{$packages->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$packages->title}}
                        </h5>

                        @if($packages->discount_price!=null)
                        <h6 style="color:red">
                        Discount price<br>
                           Rs: {{$packages->discount_price}}
                        </h6>

                        <h6 style="text-decoration: line-through; color:blue">Price<br>
                           Rs: {{$packages->price}}
                        </h6>

                        @else
                        <h6 style="color:blue">Price<br> Rs: {{$packages->price}}
                        </h6>

                        @endif
                        
                     </div>
                  </div>
               </div>

            <!-- </div>
            <div class="btn-box">
               <a href="">
               View All Packages
               </a>
            </div> -->

            @endforeach

            <!-- {!!$package->appends(Request::all())->links()!!} -->

            <span style="padding-top:20px;">
            {!!$package->withQueryString()->links('pagination::bootstrap-5')!!}
            </span>
         </div>
      </section>