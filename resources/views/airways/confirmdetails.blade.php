<head>
    <style>
    #rcorners2 {
      border-radius: 25px;

    }
    </style>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <div id="preloader">
    <div data-loader="dual-ring"></div>
    </div>
    <section class="page-header page-header-text-light bg-secondary">
    <div class="container">
    <div class="row align-items-center">
    <div class="col-md-8">
    <h1>Flights - Confirm Details</h1>
    </div>
    <div class="col-md-4">
    <ul class="breadcrumb justify-content-start justify-content-md-end mb-0">
    <li><a href="{{ URL::previous() }}">Back to Flights</a></li>
    </ul>
    </div>
    </div>
    </div>
    </section>
    <div id="content">
    <section class="container">
    <div class="row">
    <div class="col-lg-8">
    <div class="bg-light shadow-md rounded p-3 p-sm-4 confirm-details">
    <h2 class="text-6 mb-3">Confirm Flight Details</h2>
    <!-- Departure Flight Detail
    ============================================= -->
    <div class="card">
    <div class="card-header">
    <div class="row align-items-center trip-title">
    <div class="col-5 col-sm-auto text-center text-sm-left">
    <h5 class="m-0 trip-place">{{$flight->flight_country_from}}</h5>

    </div>
    <div class="col-2 col-sm-auto text-8 text-black-50 text-center trip-arrow">➝</div>
    <div class="col-5 col-sm-auto text-center text-sm-left">
    <h5 class="m-0 trip-place">{{$flight->flight_country_to}}</h5>
    </div>
    <div class="col-12 mt-1 d-block d-md-none"></div>
    <div class="col col-md-auto text-center ml-auto order-sm-0"><span class="badge badge-danger py-1 px-2 font-weight-normal text-1">Non Refundable</span></div>
    </div>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-12 col-sm-3 text-center text-md-left d-lg-flex company-info"> <span class="text-4 text-dark" style="text-transform: uppercase;">{{$flight->alias}}  </span>  </div>

    <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark"> {{ Carbon\Carbon::parse($flight->flight_schedule)->format('M d, Y') }}</span> <small class="text-muted d-block">{{$flight->flight_country_from}}</small> </div>
    <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-3 text-dark text-8 text-black-50 text-center trip-arrow"> ➝</span> <small class="text-muted d-block"></small> </div>
    <div class="col-12 col-sm-3 text-center time-info mt-3 mt-sm-0"> <span class="text-5 text-dark">{{ Carbon\Carbon::parse($flight->flight_arrival)->format('M d, Y') }}</span> <small class="text-muted d-block">{{$flight->flight_country_to}}</small> </div>
    </div>

    <!-- Fare Rules end -->
    </div>
    </div>
    <div class="alert alert-info mt-4"> <span class="badge badge-info">NOTE:</span> This is a special fare given by the airline. Airlines cancellation charges do apply. </div>
    <h2 class="text-6 mb-3 mt-5">Traveller Details - <span class="text-3"><a data-toggle="modal" data-target="#login-signup" href="#" title="Login / Sign up">Login</a> to book faster</span></h2>
    <p class="font-weight-600">Contact Details</p>
    <div class="form-row">
    <div class="col-sm-6 form-group">
    <input class="form-control" id="email" required="" placeholder="Enter Email" type="text">
    </div>
    <div class="col-sm-6 form-group">
    <input class="form-control" data-bv-field="number" id="mobileNumber" required="" placeholder="Enter Mobile Number" type="text">
    </div>
    </div>
    <p class="text-info">Your booking details will be sent to this email address and mobile number.</p>
    <p class="font-weight-600">Adult 1<span style="float:right;"> <button class="add">Add</button>

    <button class="remove">remove</button><br></span></p>
    <div class="form-row">
    <div class="col-sm-2 form-group">
    <select class="custom-select" id="title" required="">
    <option value="">Title</option>
    <option>Mr</option>
    <option>Ms</option>
    <option>Mrs</option>
    </select>
    </div>
    <div class="col-sm-5 form-group">
    <input class="form-control" id="firstName" required="" placeholder="Enter First Name" type="text">
    </div>
    <div class="col-sm-5 form-group">
    <input class="form-control" data-bv-field="number" id="lastName" required="" placeholder="Enter Last Name" type="text">
    </div>

    <div id="new_chq">

    </div>
    <input type="hidden" value="1" id="total_chq">
    </div>
    </div>
    </div>
    <!-- Side Panel (Fare Details)
    ============================================= -->
    <aside class="col-lg-4 mt-4 mt-lg-0">
    <div class="bg-light shadow-md rounded p-3">
    <h3 class="text-5 mb-3">Fare Details</h3>
    <ul class="list-unstyled">
    <li class="mb-2">Base Fare <span class="float-right text-4 font-weight-500 text-dark">P {{$flight->price}}</span><br>
    </li>

    </ul>
    <div class="text-dark bg-light-4 text-4 font-weight-600 p-3"> Total Amount <span class="float-right text-6"> P {{$flight->price}}</span> </div>
    <br>

    <button  style="width:100%;margin-bottom:3px;" id="rcorners2" data-toggle="modal" data-target="#myModal" class="btn btn-primary"><img src="{{asset('airways/images/coin.png')}}" height="25" style="padding-right:8px;"><font color="gold">ORO</font> <small>Checkout</small></button><br>

    <div id="paypal-button"></div>
    </div>
    </aside>
    <!-- Side Panel End -->
    </div>
    </section>
    <br><br>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">

    <h4 class="modal-title"><img src="{{asset('airways/images/coin.png')}}" height="25" style="padding-right:8px;">ORO Airways  </h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>

    </div>
    <div class="modal-body">
    <p>Hi, User123<span style="float:right;">ORO Balance:100 </span></p>

    <p>Base  Fare = P {{$flight->price}}</p>
    <p>Total Amount :<b> 5 ORO</b><span><br> <small>1 ORO : PHP 2000</small><span</p>

    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Pay</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
    </div>
    </div>
    </div>
    <script src="https://www.paypalobjects.com/api/checkout.js"></script>
    <script>

    paypal.Button.render({
        funding: {
            allowed: [ paypal.FUNDING.CARD ]

        },
        env: 'sandbox', // Or 'production'
        style: {
            size: 'responsive',
            color: 'gold',
            shape: 'pill',
            fundingicons: 'true',
        },
        // Set up the payment:
        // 1. Add a payment callback
        payment: function(data, actions) {
            // 2. Make a request to your server
            return actions.request.post('/api/create-payment')
            .then(function(res) {
                // 3. Return res.id from the response
                // console.log(res);
                return res.id;
            });
        },
        // Execute the payment:
        // 1. Add an onAuthorize callback
        onAuthorize: function(data, actions) {
            // 2. Make a request to your server
            return actions.request.post('/api/execute-payment', {
                paymentID: data.paymentID,
                payerID:   data.payerID
            })
            .then(function(res) {
                console.log(res);
                alert('PAYMENT WENT THROUGH!!');
                // 3. Show the buyer a confirmation message.
            });
        }
    }, '#paypal-button');
    </script>
    <script>
    function myFunction() {

        var left = (screen.width/2)-(400/2);
        var top = (screen.height/2)-(400/2);
        window.open("/payment", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,width=400,height=400 ,top=" + top + ", left=" + left);

    }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script>
    $('.add').on('click', add);
    $('.remove').on('click', remove);

    function add() {
        var new_chq_no = parseInt($('#total_chq').val()) + 1;
        var new_input = "<select id='new_" + new_chq_no + "' style='margin-left:10px;' >  <option value=''>Title</option><option value=''>Mr</option><option value=''>Ms</option><option value=''>Mrs</option></select>";
        var new_input1 = "<input type='text' id='new1_" + new_chq_no + "' style='margin-left:10px;' placeholder='Enter First Name'>";
        var new_input2 = "<input type='text' id='new2_" + new_chq_no + "' style='margin-left:10px;'  placeholder='Enter Last Name'>";
        var new_input4 = "<p id='new4_" + new_chq_no + "' style='margin-left:10px;margin-top:5px;' >Adult "+new_chq_no+" </p>";

        $('#new_chq').append(new_input4,new_input,new_input1,new_input2);

        $('#total_chq').val(new_chq_no);
    }


    function remove() {
        var last_chq_no = $('#total_chq').val();

        if (last_chq_no > 1) {
            $('#new_' + last_chq_no).remove();
            $('#new1_' + last_chq_no).remove();
            $('#new2_' + last_chq_no).remove();
            $('#new4_' + last_chq_no).remove();
            $('#total_chq').val(last_chq_no - 1);
        }
    }
    </script>
    @include('layouts.footer')
    Chat Conversation End
    Type a message...
