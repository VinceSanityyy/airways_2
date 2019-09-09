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


<div id="content">

   <br><br>
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

            <div class="text-1 bg-light-3 border border-right-0 border-left-0 py-2 px-3" >
               <div class="row">
                  <div class="col col-sm-2 text-center">Flight </div>
                  <div class="col col-sm-2 text-center">Departure</div>
                  <div class="col col-sm-2 text-center">Arrival</div>
                  <div class="col col-sm-2 text-center">Price</div>
                  <div class="col col-sm-2 text-center">Seats </div>
               </div>
            </div>
            <div class="flight-list ">

               <div class="flight-item">
                    @foreach ($flights as $data)
                    <div class="text-1 bg-light-3 border border-right-0 border-left-0 py-2 px-3">
                    </div>

                  <div class="row align-items-center flex-row pt-4 pb-2 px-3">
                     <div class="col col-sm-2 text-center time-info">
                        <span class="text-4" style="text-transform: uppercase;">{{$data->alias}}</span>
                     </div>
                     <div class="col col-sm-2 text-center time-info">
                        <span class="text-4">{{$data->flight_schedule}}</span> <small class="text-muted d-none d-sm-block">{{$data->flight_country_from}}</small>
                     </div>
                     <div class="col col-sm-2 text-center time-info">
                        <span class="text-4">{{$data->flight_arrival}}</span> <small class="text-muted d-none d-sm-block">{{$data->flight_country_to}}</small>
                     </div>
                     <div class="col col-sm-2 text-center text-dark text-6 price">₱ {{$data->price}}</div>

                     <div class="col col-sm-2 text-center text-dark text-6 price">{{$data->seats_available}}</div>
                     <div class="col-12 col-sm-2 text-center ml-auto btn-book">
                     <a href="/confirmdetails/{{$data->flight_id}}" class="btn btn-sm btn-primary">
                        <span class="d-none d-block">Book</span></a>

                     </div>

                  </div>
                  @endforeach
               </div>
            </div>
         </div>
         <br>
         <div class="pagination text-center">
                {{ $flights->links() }}
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

