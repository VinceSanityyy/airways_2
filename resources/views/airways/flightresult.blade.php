@include('layouts.styles')
@include('layouts.header')
<div id="content">
   <div id="preloader">
      <div data-loader="dual-ring"></div>
   </div>
   <div class="container">
      <button class="btn btn-primary btn-sm" onclick="myFunction()">Toggle Search</button>
      <br><br>

      <div id="myDIV">
         @include('airways.searchbar')
      </div>
      <br><br>
      <div class="container">
         <div class="bg-light shadow-md rounded py-4">
            <div class="mx-3 mb-3 text-center">
               <h2 class="text-6">
               Search Results
            </div>

            <div class="text-1 bg-light-3 border border-right-0 border-left-0 py-2 px-3">
               <div class="row">
                  <div class="col col-sm-2 text-center"><span class="d-none d-sm-block">Flight Number</span></div>
                  <div class="col col-sm-2 text-center">Departure</div>
                  <div class="col-sm-2 text-center d-none d-sm-block">Arrival</div>
                  <div class="col col-sm-2 text-center">Price</div>
               </div>
            </div>
            <div class="flight-list ">

               <div class="flight-item">
                    @foreach ($flights as $data)
                    <div class="text-1 bg-light-3 border border-right-0 border-left-0 py-2 px-3">
                    </div>

                  <div class="row align-items-center flex-row pt-4 pb-2 px-3">
                     <div class="col col-sm-2 text-center time-info">
                        <span class="text-4">{{$data->flight_id}}</span>
                     </div>
                     <div class="col col-sm-2 text-center time-info">
                        <span class="text-4">{{$data->flight_schedule}}</span> <small class="text-muted d-none d-sm-block">{{$data->flight_country_from}}</small>
                     </div>
                     <div class="col col-sm-2 text-center time-info">
                        <span class="text-4">{{$data->flight_arrival}}</span> <small class="text-muted d-none d-sm-block">{{$data->flight_country_to}}</small>
                     </div>
                     <div class="col col-sm-2 text-center text-dark text-6 price">₱ {{$data->price}}</div>
                     <div class="col-sm-2 text-center d-none d-sm-block time-info">
                        <a href="#   "> <span class="text-3">Flight Details</span> <small class="text-muted d-none d-sm-block"></small> </a>
                     </div>
                     <div class="col-12 col-sm-2 text-center ml-auto btn-book">
                        <a href="{{url("/confirmdetails")}}" class="btn btn-sm btn-primary"><i class="fas fa-shopping-cart d-block d-lg-none"></i>
                        <span class="d-none d-lg-block">Book</span></a>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<br><br><br>
<script>
   function myFunction() {
     var x = document.getElementById("myDIV");
     if (x.style.display === "none") {
       x.style.display = "block";
     } else {
       x.style.display = "none";
     }
   }
</script>
@include('layouts.footer')
@include('layouts.scripts')
