
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <title>ORO Airways</title>
    <meta name="description" content="Quickai - Recharge & Bill Payment, Booking HTML5 Template">
    <meta name="author" content="harnishdesign.net">

</head>
@include('layouts.header')
@include('layouts.styles')
@include('layouts.scripts')


<section class="page-header page-header-text-light bg-secondary">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8">
          <h1 class="text-6 mb-1 d-flex flex-wrap align-items-center">  {{ $hotel->hotel_name }}  </h1>
          <p class="opacity-8 mb-0"><i class="fas fa-map-marker-alt"></i>   {{ $hotel->hotel_location }}</p>
        </div>
        <div class="col-md-4">
          <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
            <li><a href="/">Home</a></li>
            <li><a href="booking-hotels.html">Hotels</a></li>
            <li class="active">Hotel Detail</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

<div class="content">
<br>

<section>
<div id="content">


  <div class="container">
      <div class="row">
      	<!-- Middle Panel
        ============================================= -->
        <div class="col-lg-8">
          <div class="bg-light shadow-md rounded p-3 p-sm-4 confirm-details">

            <!-- Hotel Photo Slideshow
        	============================================= -->
            <div class="owl-carousel owl-theme single-slider mb-3 owl-loaded owl-drag" data-animateout="fadeOut" data-animatein="fadeIn" data-autoplay="true" data-loop="true" data-autoheight="true" data-nav="true" data-items="1">




            <div class="owl-stage-outer owl-height" style="height: 317.625px;">
            <div class="owl-stage" style="transform: translate3d(-924px, 0px, 0px); transition: all 0s ease 0s; width: 3696px;">
            <div class="owl-item animated owl-animated-in fadeIn cloned" style="width: 462px;">
            <div class="item"><a href="#">
            <img class="img-fluid" src="{{asset('imgs/orchid.jpg')}}" alt="Deluxe Room photo"></a></div></div>
            <div class="owl-item cloned animated owl-animated-out fadeOut" style="width: 462px; left: 462px;">
            <div class="item"><a href="#">
            <img class="img-fluid" src="{{asset('imgs/whistling.jpg')}}" alt="Premium Room photo"></a></div></div>
            <div class="owl-item animated owl-animated-in fadeIn active" style="width: 462px;">
            <div class="item"><a href="#">
            <img class="img-fluid" src="{{asset('imgs/orchid.jpg')}}" alt="Hotel photo"></a></div></div>
            <div class="owl-item" style="width: 462px;">
            <div class="item"><a href="#">
            <img class="img-fluid" src="{{asset('imgs/whistling.jpg')}}" alt="Standard Room photo"></a></div></div>
            <div class="owl-item" style="width: 462px;">
            <div class="item"><a href="#">
            <img class="img-fluid" src="{{asset('imgs/orchid.jpg')}}" alt="Deluxe Room photo"></a></div></div>
            <div class="owl-item animated owl-animated-in fadeIn" style="width: 462px;">
            <div class="item"><a href="#">
            <img class="img-fluid" src="{{asset('imgs/whistling.jpg')}}" alt="Premium Room photo"></a></div></div>
            <div class="owl-item cloned" style="width: 462px;">
            <div class="item"><a href="#">
            <img class="img-fluid" src="{{asset('imgs/orchid.jpg')}}" alt="Hotel photo"></a></div></div>
            <div class="owl-item cloned" style="width: 462px;">
            <div class="item"><a href="#">
            <img class="img-fluid" src="{{asset('imgs/whistling.jpg')}}" alt="Standard Room photo"></a></div></div></div></div>
            <div class="owl-nav">
            <button type="button" role="presentation" class="owl-prev"><i class="fa fa-chevron-left"></i></button>
            <button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button></div>
            <div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button>
            <button role="button" class="owl-dot"><span></span></button></div></div><!-- Hotel Photo Slideshow end -->

            <!-- Secondary Navigation
        	============================================= -->
            <nav id="navbar-sticky" class="bg-light pb-2 mb-2 sticky-top smooth-scroll">
              <ul class="nav nav-tabs">
                <li class="nav-item"> <a class="nav-link text-nowrap" href="#known-for">Known For</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#choose-room">Choose Room</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#amenities">Amenities</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#reviews">Reviews</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#hotel-policy">Hotel Policy</a> </li>
              </ul>
            </nav><!-- Secondary Navigation end -->

            <!-- Known For
        	============================================= -->

            <p id="known-for">
                    {{ $hotel->hotel_desc }}
                 </p>


            <!-- <div class="row">
              <div class="col-12 col-sm-6">
                <ul class="simple-ul">
                  <li>Libero massa dapibus dui, eu</li>
                  <li>Celerisque nec, rhoncus eget</li>
                  <li>Praesent vitae dui</li>
                  <li>Ut euismod, turpis sollicitudin</li>
                </ul>
              </div>
              <div class="col-12 col-sm-6">
                <ul class="simple-ul">
                  <li>Libero massa dapibus dui, eu</li>
                  <li>Celerisque nec, rhoncus eget</li>
                  <li>Praesent vitae dui</li>
                  <li>Ut euismod, turpis sollicitudin</li>
                </ul>
              </div>
            </div> -->

            <!-- <div class="featured-box style-1">
              <div class="featured-box-icon text-muted"> <i class="far fa-comments"></i></div>
              <h3 class="font-weight-400 text-4 mb-1">Staff Speaks</h3>
              <p>English, Hindi, Spanish, Arabic, Russian</p>
            </div>Known For end  -->

            <hr class="mb-4">

            <!-- Choose Room
        	============================================= -->
            <h2 id="choose-room" class="text-6 mb-4 mt-2">Choose Room</h2>

            @foreach($rooms as $datas)
            <div class="row">
              <div class="col-12 col-md-5 mb-3 mb-md-0"> <img class="img-fluid rounded align-top" src="{{asset('imgs/hotel-room-1.jpg')}}" title="Standard Room" alt="Standard Room"> </div>
              <div class="col-12 col-md-7">
                <h4 class="text-5">{{$datas->room_name}}</h4>
                <ul class="list-inline mb-2">
                  <li class="list-inline-item"><span class="mr-1 text-black-50"><i class="fas fa-bed"></i></span> {{$datas->bed_desc}} </li>
                  <li class="list-inline-item"><span class="mr-1 text-black-50"><i class="fas fa-arrows-alt"></i></span> {{$datas->room_size_desc}}</li>
                </ul>
                <div class="row text-1 mb-3">
                  <div class="col-6 col-xl-4"><span class="text-success mr-1"><i class="fas fa-check"></i></span>Free WiFi</div>
                  <div class="col-6 col-xl-4"><span class="text-success mr-1"><i class="fas fa-check"></i></span>Television</div>
                  <div class="col-6 col-xl-4"><span class="text-success mr-1"><i class="fas fa-check"></i></span>Hair Dryer</div>
                  <div class="col-6 col-xl-4"><span class="text-success mr-1"><i class="fas fa-check"></i></span>Shower</div>
                  <div class="col-6 col-xl-4"><span class="text-success mr-1"><i class="fas fa-check"></i></span>Tea Maker</div>
                </div>
                <div class="d-flex align-items-center">
                  <div class="text-dark text-7 line-height-1 font-weight-500 mr-2 mr-lg-3">{{$datas->room_price}}</div>
                  <!-- <div class="d-block text-4 text-black-50 mr-2 mr-lg-3"><del class="d-block">$250</del></div>
                  <div class="text-success text-3 mr-2 mr-lg-3">16% Off!</div> -->
                  <span class="text-black-50">1 Room/Night</span> </div>
                <div class="d-flex align-items-center mt-3"> <a href="#" data-toggle="modal" data-target="#cancellation-policy">Cancellation Policy</a> <a href="" class="btn btn-sm btn-outline-primary shadow-none ml-auto">Select Room</a> </div>
              </div>
            </div>
            <hr class="my-4">

            @endforeach

            <!-- Cancellation Policy Modal -->
            <div id="cancellation-policy" class="modal fade" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Cancellation Policy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                  </div>
                  <div class="modal-body">
                    <ul>
                      <li>Non-Refundable on cancellation or No Show</li>
                      <li>goCash used in the booking will be non refundable</li>
                      <li>Any Add-on charges are Non-Refundable.</li>
                      <li>You can not change the Check-in or Check-out date.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- Cancellation Policy Modal end -->
            <!-- Choose Room end -->

            <hr class="my-4">

            <!-- Amenities
        	============================================= -->
            <h2 id="amenities" class="text-6 mb-3 mt-2">Amenities</h2>
            <p class="hotels-amenities-detail text-5"> <span class="border rounded" data-toggle="tooltip" data-original-title="Internet/Wi-Fi"><i class="fas fa-wifi"></i></span> <span class="border rounded" data-toggle="tooltip" data-original-title="Restaurant"><i class="fas fa-utensils"></i></span> <span class="border rounded" data-toggle="tooltip" data-original-title="Bar"><i class="fas fa-glass-martini"></i></span> <span class="border rounded" data-toggle="tooltip" data-original-title="Swimming Pool"><i class="fas fa-swimmer"></i></span> <span class="border rounded" data-toggle="tooltip" data-original-title="Business Facilities"><i class="fas fa-chalkboard-teacher"></i></span> <span class="border rounded" data-toggle="tooltip" data-original-title="Spa"><i class="fas fa-spa"></i></span> <span class="border rounded" data-toggle="tooltip" data-original-title="Gym"><i class="fas fa-dumbbell"></i></span> </p><!-- Amenities end -->

            <hr class="my-4">

            <!-- Reviews
        	============================================= -->
            <h2 id="reviews" class="text-6 mb-3 mt-2">Reviews</h2>
            <div class="row">
              <div class="col-sm-4 col-md-3">
                <div id="review-summary" class="bg-primary text-light rounded px-2 py-4 mb-4 mb-sm-0 text-center">
                  <div class="text-10 font-weight-600 line-height-1 d-block">4.5</div>
                  <div class="font-weight-500 my-1">Excellent</div>
                  <small class="d-block">Based on 245 reviews</small> </div>
              </div>
              <div class="col-sm-8 col-md-9">
                <div class="row">
                  <div class="col-8 col-sm-9 col-lg-10">
                    <div class="progress mb-3">
                      <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-4 col-sm-3 col-lg-2"><small class="font-weight-600 align-text-top line-height-1">Excellent</small></div>
                </div>
                <!-- /row -->
                <div class="row">
                  <div class="col-lg-10 col-9">
                    <div class="progress mb-3">
                      <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-3"><small class="font-weight-600 align-text-top line-height-1">Good</small></div>
                </div>
                <!-- /row -->
                <div class="row">
                  <div class="col-lg-10 col-9">
                    <div class="progress mb-3">
                      <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-3"><small class="font-weight-600 align-text-top line-height-1">Fair</small></div>
                </div>
                <!-- /row -->
                <div class="row">
                  <div class="col-lg-10 col-9">
                    <div class="progress mb-3">
                      <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-3"><small class="font-weight-600 align-text-top line-height-1">Poor</small></div>
                </div>
                <!-- /row -->
                <div class="row">
                  <div class="col-lg-10 col-9">
                    <div class="progress mb-3">
                      <div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                  <div class="col-lg-2 col-3"><small class="font-weight-600 align-text-top line-height-1">Bad</small></div>
                </div>
                <!-- /row -->
              </div>
            </div>
            <hr class="mb-4">
            <div class="row">
              <div class="col-12 col-sm-3 text-center">
                <div class="review-tumb bg-dark-5 text-light rounded-circle d-inline-block mb-2 text-center text-8">R</div>
                <p class="mb-0 line-height-1">Ruby Clinton</p>
                <small><em>Jan 25, 2019</em></small> </div>
              <div class="col-12 col-sm-9 text-center text-sm-left"> <span class="text-2"> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-muted opacity-4"></i> </span>
                <p class="font-weight-600 mb-1">Excellent hotel with great location</p>
                <p>We stayed in this hotel for one night and were happy that we booked this hotel. Location is excellent and hotel has a lovely ambience . Rooms are very spacious with a decent decor. Overall experience was good.</p>
                <hr>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-3 text-center">
                <div class="review-tumb text-light rounded-circle d-inline-block mb-2 text-center text-8"> <img class="rounded-circle" alt="" src="images/brands/hotels/tumb.jpg"> </div>
                <p class="mb-0 line-height-1">James Maxwell</p>
                <small><em>Dec 19, 2018</em></small> </div>
              <div class="col-12 col-sm-9 text-center text-sm-left"> <span class="text-2"> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> </span>
                <p class="font-weight-600 mb-1">Safe for Family &amp; Good service</p>
                <p>It was a nice experience the hotel was neat and clean. Good location nice staffs. food items specially Curry needs to be more tastier. this is my third stay in this hotel. great experience, Safe for Family.</p>
                <hr>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-sm-3 text-center">
                <div class="review-tumb bg-dark-5 text-light rounded-circle d-inline-block mb-2 text-center text-8">N</div>
                <p class="mb-0 line-height-1">Neil Patel</p>
                <small><em>Nov 03, 2018</em></small> </div>
              <div class="col-12 col-sm-9 text-center text-sm-left"> <span class="text-2"> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-muted opacity-4"></i> <i class="fas fa-star text-muted opacity-4"></i> </span>
                <p class="font-weight-600 mb-1">Staff is very helpful but rooms are bit small</p>
                <p>Staff is very helpful and courteous but rooms are bit small, smelly and you have to share your stay with cockroaches.</p>
                <hr>
              </div>
            </div>
            <div class="text-center"> <a href="#" class="btn btn-sm btn-outline-dark shadow-none">view more reviews</a> </div>
            <h5 class="mb-3 mt-2">Write a review</h5>
            <form>
              <div class="form-group">
                <label for="yourName">Your Name</label>
                <input type="email" class="form-control" id="yourName" required="" aria-describedby="yourName" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="yourReview">Your Review</label>
                <textarea class="form-control" rows="5" id="yourReview" required="" placeholder="Enter Your Review"></textarea>
              </div>
              <div class="form-group">
                <label>Rating</label>
                <div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input id="bad" name="reviewRating" class="custom-control-input" checked="" required="" type="radio">
                    <label class="custom-control-label" for="bad">Bad</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input id="poor" name="reviewRating" class="custom-control-input" checked="" required="" type="radio">
                    <label class="custom-control-label" for="poor">Poor</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input id="fair" name="reviewRating" class="custom-control-input" checked="" required="" type="radio">
                    <label class="custom-control-label" for="fair">Fair</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input id="good" name="reviewRating" class="custom-control-input" checked="" required="" type="radio">
                    <label class="custom-control-label" for="good">Good</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input id="excellent" name="reviewRating" class="custom-control-input" checked="" required="" type="radio">
                    <label class="custom-control-label" for="excellent">Excellent</label>
                  </div>
                </div>
              </div>
              <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
              <a href="/hotelbooking" class="btn btn-sm btn-primary order-4 ml-auto">Book Now</a>

            </form><!-- Reviews end -->

            <hr class="my-4">

            <!-- Hotel Policy
        	============================================= -->
            <h2 id="hotel-policy" class="text-6 mb-3 mt-2">Hotel Policy</h2>
            <p>The standard check-in time is 12:00 PM and the standard check-out time is 11:00 AM. Early check-in or late check-out is strictly subjected to availability and may be chargeable by the hotel. Any early check-in or late check-out request must be directed and reconfirmed with hotel directly, Accommodation, 24 hours House Keeping, Hot and Cold water available, Internet, Telephone.</p>
            <p>Hotel Policy: Most hotels do not allow unmarried/unrelated couples to check-in. This is at the full discretion of the hotel management. No refund would be applicable in case the hotel denies check-in under such circumstances., Most hotels do not allow same city/local ID Proofs for check-in. Kindly check with your hotel about the same before checking in. This is at full discretion of the hotel management. No refund would be applicable in case the hotel denies check-in under such circumstances.</p>
            <!-- Hotel Policy end -->

          </div>
        </div><!-- Middle Panel End-->

        <!-- Side Panel
        ============================================= -->
        <aside class="col-lg-4 mt-4 mt-lg-0">
          <div class="bg-light shadow-md rounded p-3 sticky-top">
          <h3 class="text-5 mb-3">Search Result</h3><hr>
          <p class="text-center mt-3 mb-1">  <i class="fa fa-map-marker" style="margin-right:5px;"></i><span class="text-uppercase font-weight-700">Destination</span>
          <br><span class=" text-uppercase font-weight-500">Manila, Philippines</span></p>
            <p class="text-center mt-3 mb-1"><span class="text-uppercase font-weight-700">Checkin</span> : 12:00 PM / <span class="text-uppercase font-weight-700">Checkout</span> : 11:00 AM</p>
              </div>
        </aside>
        <!-- Side Panel End -->
      </div>
    </div>
  </div>
</section>








