
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


<div class="container">
<div class="col-lg-12">
<div class="bg-light shadow-md rounded p-4">
<!-- Personal Information
============================================= -->
<div class="row">
<div class="col-lg-8">
<h4 class="mb-4">
<i class="fa fa-calendar"></i>
Contact Details</h4>
<hr>
<form id="personalInformation" method="post">
<div class="mb-3">
<div class="custom-control custom-radio custom-control-inline">
<input id="male" name="profile" class="custom-control-input" checked="" required="" type="radio">
<label class="custom-control-label" for="mr">Mr</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
<input id="female" name="profile" class="custom-control-input" required="" type="radio">
<label class="custom-control-label" for="ms">Ms</label>
</div>
</div>
<div class="form-group">
<label for="fullName">First Name</label>
<input type="text"  class="form-control" data-bv-field="fullName" id="fullName" required="" placeholder="Full Name">
</div>
<div class="form-group">
<label for="mobileNumber">Last Name</label>
<input type="text"  class="form-control" data-bv-field="mobilenumber" id="mobileNumber" required="" placeholder="Mobile Number">
</div>
<div class="form-group">
<label for="emailID">Email</label>
<input type="text"  class="form-control" data-bv-field="emailid" id="emailID" required="" placeholder="Email ID">
</div>

<div class="form-group">
<label for="mobileno">Mobile number</label>
<input type="number" class="form-control" data-bv-field="emailid" id="mobileNO" required="" placeholder="+639XXXXXXXXX">
</div>
<button class="btn btn-primary" type="submit">Continue</button>
</form>
</div>


<div class="col-lg-4 mt-4 mt-lg-0 ">
<div class="bg-light shadow-md rounded p-3">

<h3 class="text-5 mb-3"><i class="fa fa-bed"></i><span style="margin-left:5px;">Booking Details</span></h3>
<hr>
<div>
<h4 class="text-4 ">The Orchid Hotel</h4>
<span > Matina, Davao City</span>
<br>
<span>Sat, 07 Sep 2019 - Sun, 08 Sep 2019 </span>
</div>
<br>
<ul class="list-unstyled">
<li class="mb-2"><b>Room:</b> Deluxe <span class="float-right text-4 font-weight-500 text-dark">₱980</span><br>

</ul>

<hr>


<ul class="list-unstyled">
<li class="mb-2">Hotel Price: <span class="float-right text-4 font-weight-500 text-dark">₱980</span><br>

<li class="mb-2">Taxes &amp; Fees <span class="float-right text-4 font-weight-500 text-dark">₱215</span></li>

</ul>
<div class="text-dark bg-light-4 text-4 font-weight-600 p-3"> Total Amount <span class="float-right text-6">₱1290</span> </div>

</div>

</div>
</div>
<!-- Personal Information end -->




</div>
</div>
</div>
</div>
</section>








