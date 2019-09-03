<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://js.stripe.com/v3/"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
summary {
    display: block;
}
a {
    background-color: transparent;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333333;
    background-color: #ffffff;
}
a {
    color: #337ab7;
    text-decoration: none;
}
a:hover,
a:focus {
    color: #23527c;
    text-decoration: underline;
}
a:focus {
    outline: thin dotted;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
}
.close {
    float: right;
    font-size: 21px;
    font-weight: bold;
    line-height: 1;
    color: #000000;
    text-shadow: 0 1px 0 #ffffff;
    opacity: 0.2;
    filter: alpha(opacity=20);
}
.close:hover,
.close:focus {
    color: #000000;
    text-decoration: none;
    cursor: pointer;
    opacity: 0.5;
    filter: alpha(opacity=50);
}
button.close {
    padding: 0;
    cursor: pointer;
    background: transparent;
    border: 0;
    -webkit-appearance: none;
}
.modal-open {
    overflow: hidden;
}
.modal {
    display: none;
    overflow: hidden;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    -webkit-overflow-scrolling: touch;
    outline: 0;
}
.modal.fade .modal-dialog {
    -webkit-transform: translate(0, -25%);
    -ms-transform: translate(0, -25%);
    -o-transform: translate(0, -25%);
    transform: translate(0, -25%);
    -webkit-transition: -webkit-transform 0.3s ease-out;
    -o-transition: -o-transform 0.3s ease-out;
    transition: transform 0.3s ease-out;
}
.modal.in .modal-dialog {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    -o-transform: translate(0, 0);
    transform: translate(0, 0);
}
.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
}
.modal-dialog {
    position: relative;
    width: auto;
    margin: 10px;
}
.modal-content {
    position: relative;
    background-color: #ffffff;
    border: 1px solid #999999;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 6px;
    -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
    box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    outline: 0;
}
.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: transparent;
}
.modal-backdrop.fade {
    opacity: 0;
    filter: alpha(opacity=0);
}
.modal-backdrop.in {
    opacity: 0.5;
    filter: alpha(opacity=50);
}
.modal-header {
    padding: 15px;
    border-bottom: 1px solid #e5e5e5;
    min-height: 16.42857143px;
}
.modal-header .close {
    margin-top: -2px;
}
.modal-title {
    margin: 0;
    line-height: 1.42857143;
}
.modal-body {
    position: relative;
    padding: 15px;
}
.modal-footer {
    padding: 15px;
    text-align: right;
    border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
    margin-left: 5px;
    margin-bottom: 0;
}
.modal-footer .btn-group .btn + .btn {
    margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
    margin-left: 0;
}
.modal-scrollbar-measure {
    position: absolute;
    top: -9999px;
    width: 50px;
    height: 50px;
    overflow: scroll;
}
.clickable {
    cursor:pointer;
}
@media (min-width: 768px) {
    .modal-dialog {
        width: 600px;
        margin: 30px auto;
    }
    .modal-content {
        -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    }
    .modal-sm {
        width: 300px;
    }
}
@media (min-width: 992px) {
    .modal-lg {
        width: 900px;
    }
}
.clearfix:before,
.clearfix:after,
.modal-footer:before,
.modal-footer:after {
    content: " ";
    display: table;
}
.clearfix:after,
.modal-footer:after {
    clear: both;
}
.center-block {
    display: block;
    margin-left: auto;
    margin-right: auto;
}
.pull-right {
    float: right !important;
}
.pull-left {
    float: left !important;
}
.hide {
    display: none !important;
}
.show {
    display: block !important;
}
.invisible {
    visibility: hidden;
}
.text-hide {
    font: 0/0 a;
    color: transparent;
    text-shadow: none;
    background-color: transparent;
    border: 0;
}
.hidden {
    display: none !important;
}
.affix {
    position: fixed;
}
/**
* The CSS shown here will not be introduced in the Quickstart guide, but shows
* how you can use CSS to style your Element's container.
*/
.StripeElement {
    box-sizing: border-box;

    height: 40px;

    padding: 10px 12px;

    border: 1px solid transparent;
    border-radius: 4px;
    background-color: white;

    box-shadow: 0 1px 3px 0 #e6ebf1;
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
}

.StripeElement--focus {
    box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
    border-color: #fa755a;
}

.StripeElement--webkit-autofill {
    background-color: #fefde5 !important;
}
body {
    font-family: Arial;
    font-size: 17px;
    padding: 8px;
}

* {
    box-sizing: border-box;
}

.row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
}

.col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
}

.col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
}

.col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
}

.col-25,
.col-50,
.col-75 {
    padding: 0 16px;
}

.container {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
}

input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

label {
    margin-bottom: 10px;
    display: block;
}

.icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
}

.btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 45%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.btn:hover {
    background-color: #45a049;
}

a {
    color: #2196F3;
}

hr {
    border: 1px solid lightgrey;
}

span.price {
    float: right;
    color: grey;
}
.collapsible {

  color: black;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active {
  background-color: green;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
    .row {
        flex-direction: column-reverse;
    }

    .col-25 {
        margin-bottom: 20px;
    }
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 100%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: right;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

</style>
</head>
<body>

        <ul>
                <li><a href="#contact">Features</a></li>
                <li><a class="active" href="payment.payment">Payment</a></li>
                <li><a  href="/">Home</a></li>

              </ul>
              <br>
<div class="row" >
<div class="col-75">
<div class="container">
{!! Form::open(['action' => 'TempPaymentController@store','method' => 'POST', 'id' => 'payment-form']) !!}
<h3>Contact Details</h3>
<div id="app">

@include('payment.flash-message')


@yield('content')
</div>
<table width="70%;">
<tr>
<td width="50%;">
<div class="form-group">
{{ Form::label('email','Email Address')}}
{{ Form::text('email','',['class'=> 'form-control','placeholder' => 'Email' ,'required' => 'required'])}}
</div>
</td>
<td width="40%;">
<div class="form-group">
{{ Form::label('contact','Contact Number')}}
{{ Form::text('contact','',['class'=> 'form-control','placeholder' => 'Contact Number','required' => 'required'])}}
</div>
</td>
</tr>
</table>
<hr>
<p class="collapsible">Add my Emergency Contact</p>
<div class="content">

<table width="70%;">
<tr>
<td width="50%;">
<div class="form-group">

{{ Form::text('tbd','',['class'=> 'form-control','placeholder' => 'Email'])}}
</div>
</td>
<td width="40%;">
<div class="form-group">

{{ Form::text('tbd','',['class'=> 'form-control','placeholder' => 'Contact Number'])}}
</div>
</td>
</tr>
<tr>
<td width="50%;">
<div class="form-group">

{{ Form::text('tbd','',['class'=> 'form-control','placeholder' => 'Email'])}}
</div>
</td>
<td width="40%;">
<div class="form-group">

{{ Form::text('tbd','',['class'=> 'form-control','placeholder' => 'Contact Number'])}}
</div>
</td>
</tr>
</table>
 </div>
<hr>
<h3>Booking Details</h3>

<table width="100%;">
<tr>
<td>
@foreach($flight as $post)



<p><i class="fa fa-plane"></i> Depart Date</p>
<p style="margin-left:17px;margin-top:-16px;">{{$post-> DepartDate}}</p>
<!-- <p style="margin-left:17px;margin-top:-16px;font-size:13px;">A1 | 8:50- 10:50 | 2 hours</p> -->
</td>
<td>
<p><i class="fa fa-plane"></i> Return Date</p>
<p style="margin-left:17px;margin-top:-16px;"> {{$post-> ReturnDate}}</p>
<!-- <p style="margin-left:17px;margin-top:-16px;font-size:13px;">A1 | 6:50- 8:50 | 2 hours</p> -->
</td></tr>
@endforeach
</table>
<hr>
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
Show Booking Fare Details
<i class="fa fa-plane"></i>
</div>
</div>
<div class="col-25">
<div class="container">
<?php $i=0;
?>
@foreach($flight as $post)
<?php $i++;
?>
<h4>Bookings <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>{{$i}}</b></span></h4>
<p><a href="#">Flight Cost</a> <span class="price">P {{$post-> price}}</span></p>
<p><a href="#">No. of Passengers</a> <span class="price">{{$post-> PassengerNo}}x</span></p>
<p><a href="#">Fee</a> <span class="price">P {{($post->price*$post->PassengerNo*$i)*.029+20}}</span></p>
<p><a href="#">VAT</a> <span class="price">P 0.00</span></p>
@endforeach
<hr>

<div class="form-group">
{{ Form::number('tax',($post->price*$post->PassengerNo*$i)*.029+20,['class'=> 'form-control','hidden'])}}
{{ Form::number('total',($post->price*$post->PassengerNo*$i)+($post->price*$post->PassengerNo*$i)*.029+20,['class'=> 'form-control','hidden'])}}
</div>
<p id="tots">Total <span class="price" style="color:black" id="tots"><b id="tots">P {{($post->price*$post->PassengerNo*$i)+(($post->price*$post->PassengerNo*$i)*.029+20)}}</b></span></p>
</div>
</div>
</div>
<div class="row" style="margin-top:10px;">
<div class="col-75">
<div class="container">


<div class="row">
<div class="col-50">

<div class="card">
<h3 style="margin-left:10px;">Payment</h3>

<div class="form-group">
{{ Form::label('NameonCard','Contact Number',['style' => 'margin-left:10px;width:90%;'])}}
{{ Form::text('NameonCard','',['class'=> 'form-control','placeholder' => 'Vince Bustrillo','required' => 'required','style' => 'margin-left:10px;width:90%;'])}}
</div>
<div class="form-row">
<label for="card-element1" style="margin-left:10px;">
Credit or debit card
</label>
<div id="card-element1">
<!-- A Stripe Element will be inserted here. -->
</div>

<div id="card-errors" role="alert"></div>
</div>
<br>
<div class="col-50">
</div>
</div>
</div>

<div class="col-50">
<p style="font-size:14px;margin-top:100px;">* A non-refundable amount of <font color="red">P {{($post->price*$post->PassengerNo*$i)*.029+20}}</font> will be added to the total amount.</p>
</div>
</div>
<label>

</label>
<p style="font-size:12px;"><input type="checkbox" checked="checked" name="sameadr"> By clicking "Purchase", you can confirm that you understand and accept our  <a href="termsofuse" target="_blank"><font color="red">Terms and Conditions</font></a> of Carriage, which address cancellation, refund and rebooking, no show, baggage allowance and travel documents, and <font color="Red">other policies.</font></p>
{{Form::submit('Pay',['class'=>'btn btn-primary'])}}
<p style="font-size:12px;text-align:center;">On Clicking "Pay" you will be redirected to the payment gateway</p>
</button>

<!-- The Modal -->
<div class="modal" id="myModal">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
<div style="background-color:black;height:35px;color:white;">
<?php $i=1;
?>

@foreach($flight as $post)
<?php $i++

?>
<h4 class="modal-title" style="margin-left:10px;" >Booking Details<span style="float:right;">P {{$post->price*$post->PassengerNo*$i}}<button type="button" class="close" data-dismiss="modal" style="margin-left:5px;color:white;">&times;</button><br></span></h4>
@endforeach
</div>
</div>

<!-- Modal body -->
<div class="modal-body">
<table width="100%;">



@foreach($posts as $post)
<tr>
<td>
<p><i class="fa fa-plane"></i> Depart Date</p>

<p style="margin-left:17px;margin-top:-16px;">{{$post-> DepartDate}}</p>
</td>
<td>
<p>{{$post-> DepartLoc}} <i class="fa fa-plane"></i>  {{$post-> ReturnLoc}}</p>
<p style="margin-top:-16px;font-size:13px;">A1 | 6:50- 8:50 | 2 hours</p>
<hr>
</td>
</tr>
<tr>
<td>
<p><i class="fa fa-plane"></i> Depart Total</p>
<p style="margin-left:17px;margin-top:-16px;color:lime;">{{$post->price*$post->PassengerNo}}</p>
</td>
<td>
<p style="color:lime;">Fare, Taxes and Fees</p>
<p style="margin-top:-16px;font-size:14px;">{{$post->PassengerNo}}x Guest</p>
<p  style="margin-top:-16px;font-size:14px">{{$post->PassengerNo}}x VAT</p>
</td>
<td align="right"><br>
<p style="font-size:14px;">P {{$post->price}}.00</p>
<p style="margin-top:-16px;font-size:14px;">P 0.00</p>

</td>
</tr>
<tr>
<td colspan="3"><hr></td>
</tr>

@endforeach


</table>
</div>

<!-- Modal footer -->
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>
{!! Form::close() !!}
</div>
</div>

<div class="col-25">

</div>
</div>



<script>
var stripe = Stripe('pk_test_cs3mQtUUKKTZBlzWzeea2o2l00PX4W9G5n');
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
    base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
            color: '#aab7c4'
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element1');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
    event.preventDefault();

    stripe.createToken(card).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error.
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        } else {
            // Send the token to your server.
            stripeTokenHandler(result.token);
        }
    });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInputrequired = true;
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);

    form.appendChild(hiddenInput);

    // Submit the form
    form.submit();
}

</script>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
</body>
</html>
