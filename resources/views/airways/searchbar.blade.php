


    <!-- Tabs -->
    <ul class="nav nav-tabs style-2" id="myTab" role="tablist">
       <li class="nav-item"> <a class="nav-link active" id="hotels-tab" data-toggle="tab" href="#hotels" role="tab" aria-controls="hotels" aria-selected="true">Hotels</a> </li>
       <li class="nav-item"> <a class="nav-link" id="flights-tab" data-toggle="tab" href="#flights" role="tab" aria-controls="flights" aria-selected="true">Flights</a> </li>
    </ul>
    <div class="tab-content bg-light shadow-md rounded rounded-top-0 px-4 pt-4 pb-2" id="myTabContent">
       <!-- Search Hotels -->
       <div class="tab-pane fade show active" id="hotels" role="tabpanel" aria-labelledby="hotels-tab">
          <h2 class="text-4 mb-3">Book Domestic and International Hotels</h2>
          <form id="bookingHotels" method="post">
             <div class="form-row">
                <div class="col-md-12 col-lg form-group">
                   <input type="text" class="form-control" id="hotelsFrom" required placeholder="Enter City">
                   <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span>
                </div>
                <div class="col-md-6 col-lg form-group">
                   <input id="hotelsCheckIn" type="text" class="form-control" required placeholder="Check In">
                   <span class="icon-inside"><i class="far fa-calendar-alt"></i></span>
                </div>
                <div class="col-md-6 col-lg form-group">
                   <input id="hotelsCheckOut" type="text" class="form-control" required placeholder="Check Out">
                   <span class="icon-inside"><i class="far fa-calendar-alt"></i></span>
                </div>
                <div class="col-md-6 col-lg travellers-class form-group">
                   <input type="text" id="hotelsTravellersClass" class="travellers-class-input form-control" name="hotels-travellers-class" placeholder="Rooms / People" required onkeypress="return false;">
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
                               <input type="text" data-ride="spinner" id="hotels-rooms" class="qty-spinner form-control" value="1" readonly>
                               <div class="input-group-append">
                                  <button type="button" class="btn bg-light-4" data-value="increase" data-target="#hotels-rooms" data-toggle="spinner">+</button>
                               </div>
                            </div>
                         </div>
                      </div>
                      <hr class="mt-2 mb-4">
                      <div class="row align-items-center">
                         <div class="col-sm-7">
                            <p class="mb-sm-0">Adults <small class="text-muted">(12+ yrs)</small></p>
                         </div>
                         <div class="col-sm-5">
                            <div class="qty input-group">
                               <div class="input-group-prepend">
                                  <button type="button" class="btn bg-light-4" data-value="decrease" data-target="#adult-travellers" data-toggle="spinner">-</button>
                               </div>
                               <input type="text" data-ride="spinner" id="adult-travellers" class="qty-spinner form-control" value="1" readonly>
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
                               <input type="text" data-ride="spinner" id="children-travellers" class="qty-spinner form-control" value="0" readonly>
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
                   <a href="/hotelreservation1" class="btn btn-primary btn-block">Search</a>
                </div>
             </div>
          </form>
       </div>
       <!-- Search Flight -->
       <div class="tab-pane fade" id="flights" role="tabpanel" aria-labelledby="flights-tab">
          <h2 class="text-4 mb-3">Book Domestic and International Flights</h2>
          <form method="GET"  autocomplete="off" id="bookingFlight" action="{{url("/flightSearch")}}">
          {{ csrf_field() }}
          <div class="form-row">
             <div class="col-md-8 col-lg-3 form-group">
                <input class="form-control" type="text" name="flightFrom" id="flightFrom"  placeholder="From">
                <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span>
             </div>
             <div class="col-md-8 col-lg-3 form-group">
                <input class="form-control" type="text"  name="flightTo" id="flightTo"  placeholder="To">
                <span class="icon-inside"><i class="fas fa-map-marker-alt"></i></span>
             </div>
             <div class="col-md-8 col-lg-3 form-group">
                <input class="form-control" name="flightDepart"  id="flightDepart" required required placeholder="Departure Date">
                <span class="icon-inside"><i class="far fa-calendar-alt"></i></span>
             </div>
             <div class="col-md-12 form-group">
                <button class="btn btn-primary btn-block" type="submit">Search</button>
             </div>
          </div>
          </form>
       </div>
    </div>
    <!-- Tabs End -->
 </div>
 </div>


