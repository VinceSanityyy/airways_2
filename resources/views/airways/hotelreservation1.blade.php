
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



<div class="content">
<br>

<section>
<div id="content">


    <section class="container">


        <div class="row">
          <div class="col mb-2">
            <form id="bookingHotels" method="get"  >
              <div class="form-row">
                <div class="col-md-12 col-lg form-group">
                  <input type="text" class="form-control ui-autocomplete-input" id="hotelsFrom" required="" placeholder="Enter City/Hotel" autocomplete="off" name="hotel_name">
                  <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span> </div>
                <div class="col-md-6 col-lg form-group">
                  <input id="hotelsCheckIn" type="text" class="form-control" required="" placeholder="Check In">
                  <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                <div class="col-md-6 col-lg form-group">
                  <input id="hotelsCheckOut" type="text" class="form-control" required="" placeholder="Check Out">
                  <span class="icon-inside"><i class="far fa-calendar-alt"></i></span> </div>
                <div class="col-md-6 col-lg travellers-class form-group">
                  <input type="text" id="hotelsTravellersClass" class="travellers-class-input form-control" name="hotels-travellers-class" placeholder="Rooms / People" required="" onkeypress="return false;">
                  <span class="icon-inside"><i class="fas fa-caret-down"></i></span>
                  <div class="travellers-dropdown" style="display: none;">
                    <div class="row align-items-center">
                      <div class="col-sm-7">
                        <p class="mb-sm-0">Rooms</p>
                      </div>
                      <div class="col-sm-5">
                        <div class="qty input-group">
                          <div class="input-group-prepend">
                            <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#hotels-rooms" data-toggle="spinner">-</button>
                          </div>
                          <input type="text" data-ride="spinner" id="hotels-rooms" class="qty-spinner form-control" value="1" readonly="">
                          <div class="input-group-append">
                            <button type="button" class="btn bg-light-4" data-value="increase" data-target="#hotels-rooms" data-toggle="spinner">+</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="mt-2 mb-4">
                    <div class="row align-items-center">
                      <div class="col-sm-7">
                        <p class="mb-sm-0"> Adults <small class="text-muted">(12+ yrs)</small></p>
                      </div>
                      <div class="col-sm-5">
                        <div class="qty input-group">
                          <div class="input-group-prepend">
                            <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#adult-travellers" data-toggle="spinner">-</button>
                          </div>
                          <input type="text" data-ride="spinner" id="adult-travellers" class="qty-spinner form-control" value="1" readonly="">
                          <div class="input-group-append">
                            <button type="button" class="btn bg-light-4" data-value="increase" data-target="#adult-travellers" data-toggle="spinner">+</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr class="my-2">
                    <div class="row align-items-center">
                      <div class="col-sm-7">
                        <p class="mb-sm-0">Children <small class="text-muted">(1-12 yrs)</small></p>
                      </div>
                      <div class="col-sm-5">
                        <div class="qty input-group">
                          <div class="input-group-prepend">
                            <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#children-travellers" data-toggle="spinner">-</button>
                          </div>
                          <input type="text" data-ride="spinner" id="children-travellers" class="qty-spinner form-control" value="0" readonly="">
                          <div class="input-group-append">
                            <button type="button" class="btn bg-light-4" data-value="increase" data-target="#children-travellers" data-toggle="spinner">+</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-block submit-done mt-3" type="button">Done</button>
                  </div>
                </div>
                <div class="col-md-6 col-lg form-group">
                  <button class="btn btn-primary btn-block" type="submit">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="row">


        </div>
        <div class="row">

        <!-- Side Panel
        ============================================= -->
        <aside class="col-lg-3">
            <div class="bg-light shadow-md rounded p-3">
              <h3 class="text-5">Filter</h3>
              <div class="accordion accordion-alternate style-2" id="toggleAlternate">

              <div class="card">
                  <div class="card-header" id="hotelName">
                    <h5 class="mb-0"> <a href="#" class="collapse" data-toggle="collapse" data-target="#togglehotelName" aria-expanded="true" aria-controls="togglehotelName">Hotel Name</a> </h5>
                  </div>
                  <div id="togglehotelName" class="collapse show" aria-labelledby="hotelName">
                    <div class="card-body">

                      <div class="form-row">
                      	<div class="col-md-12 col-lg form-group mb-0">
                      	<input type="text" class="form-control form-control-sm" id="SearchHotel" placeholder="Search by Hotel Name">
                      	<span class="icon-inside"><i class="fas fa-search"></i></span>
                      </div>
                      </div>

                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header" id="price">
                    <h5 class="mb-0"> <a href="#" class="collapse" data-toggle="collapse" data-target="#togglePrice" aria-expanded="true" aria-controls="togglePrice">Price</a> </h5>
                  </div>
                  <div id="togglePrice" class="collapse show" aria-labelledby="price">
                    <div class="card-body">
                      <p>
                        <input id="amount" type="text" readonly="" class="form-control border-0 bg-transparent p-0">
                      </p>
                      <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 10.4167%; width: 71.25%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 10.4167%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 81.6667%;"></span></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="propertyTypes">
                    <h5 class="mb-0"> <a href="#" class="collapse" data-toggle="collapse" data-target="#togglepropertyTypes" aria-expanded="true" aria-controls="togglepropertyTypes">Property Types</a> </h5>
                  </div>
                  <div id="togglepropertyTypes" class="collapse show" aria-labelledby="propertyTypes">
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="hotel" name="propertyTypes" class="custom-control-input">
                        <label class="custom-control-label d-block" for="hotel">Hotel <small class="text-muted float-right">250</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="resort" name="propertyTypes" class="custom-control-input">
                        <label class="custom-control-label d-block" for="resort">Resort <small class="text-muted float-right">76</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="villa" name="propertyTypes" class="custom-control-input">
                        <label class="custom-control-label d-block" for="villa">Villa <small class="text-muted float-right">31</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="heritage" name="propertyTypes" class="custom-control-input">
                        <label class="custom-control-label d-block" for="heritage">Heritage <small class="text-muted float-right">12</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="motel" name="propertyTypes" class="custom-control-input">
                        <label class="custom-control-label d-block" for="motel">Motel <small class="text-muted float-right">5</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="guestHouse" name="propertyTypes" class="custom-control-input">
                        <label class="custom-control-label d-block" for="guestHouse">Guest House <small class="text-muted float-right">107</small></label>                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="farmHouse" name="propertyTypes" class="custom-control-input">
                        <label class="custom-control-label d-block" for="farmHouse">Farm House <small class="text-muted float-right">66</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="palace" name="propertyTypes" class="custom-control-input">
                        <label class="custom-control-label d-block" for="palace">Palace <small class="text-muted float-right">18</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="sercicedApartments" name="propertyTypes" class="custom-control-input">
                        <label class="custom-control-label d-block" for="sercicedApartments">Serviced Apartments <small class="text-muted float-right">41</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="starCategory">
                    <h5 class="mb-0"> <a href="#" class="collapse" data-toggle="collapse" data-target="#togglestarCategory" aria-expanded="true" aria-controls="togglestarCategory">Star Category</a> </h5>
                  </div>
                  <div id="togglestarCategory" class="collapse show" aria-labelledby="starCategory">
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="5Star" name="starCategory" class="custom-control-input">
                        <label class="custom-control-label d-block" for="5Star">5 Star <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i> <small class="text-muted float-right">512</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="4Star" name="starCategory" class="custom-control-input">
                        <label class="custom-control-label d-block" for="4Star">4 Star <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><small class="text-muted float-right">476</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="3Star" name="starCategory" class="custom-control-input">
                        <label class="custom-control-label d-block" for="3Star">3 Star <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i> <small class="text-muted float-right">176</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="2Star" name="starCategory" class="custom-control-input">
                        <label class="custom-control-label d-block" for="2Star">2 Star <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i> <small class="text-muted float-right">231</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="1Star" name="starCategory" class="custom-control-input">
                        <label class="custom-control-label d-block" for="1Star">1 Star <i class="fas fa-star text-warning"></i> <small class="text-muted float-right">5</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="userReview">
                    <h5 class="mb-0"> <a href="#" class="collapse" data-toggle="collapse" data-target="#toggleuserReview" aria-expanded="true" aria-controls="toggleuserReview">User Review</a> </h5>
                  </div>
                  <div id="toggleuserReview" class="collapse show" aria-labelledby="userReview">
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="excellent" name="userReview" class="custom-control-input">
                        <label class="custom-control-label d-block" for="excellent">Excellent <small class="text-muted float-right">499</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="good" name="userReview" class="custom-control-input">
                        <label class="custom-control-label d-block" for="good">Good <small class="text-muted float-right">310</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="fair" name="userReview" class="custom-control-input">
                        <label class="custom-control-label d-block" for="fair">Fair <small class="text-muted float-right">225</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="poor" name="userReview" class="custom-control-input">
                        <label class="custom-control-label d-block" for="poor">Poor <small class="text-muted float-right">110</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="bad" name="userReview" class="custom-control-input">
                        <label class="custom-control-label d-block" for="bad">Bad <small class="text-muted float-right">44</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="amenities">
                    <h5 class="mb-0"> <a href="#" class="collapse" data-toggle="collapse" data-target="#toggleamenities" aria-expanded="true" aria-controls="toggleamenities">Amenities</a> </h5>
                  </div>
                  <div id="toggleamenities" class="collapse show" aria-labelledby="amenities">
                    <div class="card-body">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="internetWiFi" name="amenities" class="custom-control-input">
                        <label class="custom-control-label d-block" for="internetWiFi"><i class="fas fa-wifi"></i> Internet/Wi-Fi <small class="text-muted float-right">512</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="restaurant" name="amenities" class="custom-control-input">
                        <label class="custom-control-label d-block" for="restaurant"><i class="fas fa-utensils"></i> Restaurant <small class="text-muted float-right">476</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="bar" name="amenities" class="custom-control-input">
                        <label class="custom-control-label d-block" for="bar"><i class="fas fa-glass-martini"></i> Bar <small class="text-muted float-right">176</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="swimmingPool" name="amenities" class="custom-control-input">
                        <label class="custom-control-label d-block" for="swimmingPool"><i class="fas fa-swimmer"></i> Swimming Pool <small class="text-muted float-right">231</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="businessFacilities" name="amenities" class="custom-control-input">
                        <label class="custom-control-label d-block" for="businessFacilities"><i class="fas fa-chalkboard-teacher"></i> Business Facilities <small class="text-muted float-right">5</small></label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="spaWellness" name="amenities" class="custom-control-input">
                        <label class="custom-control-label d-block" for="spaWellness"><i class="fas fa-spa"></i> Spa/Wellness <small class="text-muted float-right">107</small></label>                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="gym" name="amenities" class="custom-control-input">
                        <label class="custom-control-label d-block" for="gym"><i class="fas fa-dumbbell"></i> Gym <small class="text-muted float-right">66</small></label>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </aside><!-- Side Panel end -->

          <div class="col-lg-9 mt-4 mt-lg-0">
          <!-- Sort Filters
          ============================================= -->
          <div class="border-bottom mb-3 pb-3">
          <div class="row align-items-center">
              <div class="col-6 col-md-8">
              <span class="mr-3"><span class="text-4">Ahmedabad:</span> <span class="font-weight-600">860 Hotels</span> found</span> <span class="text-warning text-nowrap">Prices inclusive of taxes</span></div>
              <div class="col-6 col-md-4">
              <div class="row no-gutters ml-auto">
                <label class="col col-form-label-sm text-right mr-2 mb-0" for="input-sort">Sort By:</label>
                <select id="input-sort" class="custom-select custom-select-sm col">
                  <option value="" selected="selected">Popularity</option>
                  <option value="">Price - Low to High</option>
                  <option value="">Price - High to Low</option>
                  <option value="">User Rating - High to Low</option>
                </select>
              </div>
              </div>
              </div>
          </div><!-- Sort Filters end -->

          <!-- List Item
          ============================================= -->
          <div class="hotels-list">
          @foreach($data as $datas)
              <div class="hotels-item bg-light shadow-md rounded p-3">
                <div class="row">
                  <div class="col-md-4">
                      <a href="#"><img class="img-fluid rounded align-top" src="{{asset('imgs/orchid.jpg')}}" alt="hotels"></a>
                  </div>
                  <div class="col-md-8 pl-3 pl-md-0 mt-3 mt-md-0">
                      <div class="row no-gutters">
                      <div class="col-sm-9">



                      <h4><a href="#" class="text-dark text-5">{{ $datas->hotel_name }}</a></h4>

                      <p class="mb-2">

                          <span class="text-black-50"><i class="fas fa-map-marker-alt"></i> {{ $datas->hotel_location }}</span>
                      </p>

                      <p class="reviews mb-2">
                          <span class="reviews-score px-2 py-1 rounded font-weight-600 text-light">8.2</span> <span class="font-weight-600">Excellent</span> <a class="text-black-50" href="#">(245 reviews)</a>
                      </p>
                      <p class="text-danger mb-0">Last Booked - 18 hours ago</p>
                      </div>
                      <div class="col-sm-3 text-right d-flex d-sm-block align-items-center">
                          <!-- <div class="text-success text-3 mb-0 mb-sm-1 order-2 ">16% Off!</div>
                          <div class="d-block text-3 text-black-50 mb-0 mb-sm-2 mr-2 mr-sm-0 order-1"><del class="d-block">$250</del></div> -->
                          <div class="text-dark text-7 font-weight-500 mb-0 mb-sm-2 mr-2 mr-sm-0 order-0">₱  {{ $datas->hotel_starting_price }}</div>
                          <div class="text-black-50 mb-0 mb-sm-2 order-3 d-none d-sm-block">1 Room/Night</div>
                          <a href="/hoteldetails/{{$datas->id}}" class="btn btn-sm btn-primary order-4 ml-auto">Book Now</a>


                       </div>
                  </div>
                  </div>
                </div>
              </div>
              @endforeach

            </div><!-- List Item end -->

            <!-- Pagination
            ============================================= -->
            <div class="pagination justify-content-center mt-4 mb-0">
              {{ $data->links() }}
              </div><!-- Paginations end -->

          </div>
        </div>
    </section>
  </div>
</section>

@include('layouts.footer')







