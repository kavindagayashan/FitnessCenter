<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>Packages</span>
               </h2>
            </div>
            <div class="row">

            @foreach($package as $package )

               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('package_details',$package->id)}}" class="option1">
                           More Details
                           </a>
                           <a href="" class="option2">
                           Register
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="package/{{$package->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$package->title}}
                        </h5>
                        
                        <h6>
                           {{$package->description}}
                        </h6>
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
         </div>
      </section>