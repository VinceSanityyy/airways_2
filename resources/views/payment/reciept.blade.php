@include('layouts.header')
@include('layouts.styles')
@include('layouts.scripts')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.force{

display: block;
margin-left: auto;
margin-right: auto;
width: 50%;
border: 1px solid black;
}
table, td, th {
border: 1px solid black;
}
table {
border-collapse: collapse;
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
/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {

.col-25 {
    margin-bottom: 20px;
}
}</style>
</head>
<body>



        <div class="container">
                <div class="bg-light shadow-md rounded py-4">
                   <div class="mx-3 mb-3 text-center">
        <br<br>
<h1 style="text-align:center;">Invoice</h1>
<div class="row">
<div class="col-50">
<p>Vincent Dave Te<Br>
Block 500 Lot 1000 Deca Homes<Br>
Cabantian, Davao City<br><br>
Contact Number: +639278386091</p>
<H3 style="padding-top:30px;">ORO Airways</H3>

</div>

<div class="col-50">
<table style="width:90%;float:right;margin-top:170px;">
<tr>
<td style="width:35%;">Invoice No.</td>
<td align="right">1</td>
</tr>
<tr>
<td style="width:35%;">Invoice No.</td>
<td align="right">120</td>
</tr>
<tr>
<td style="width:35%;">Invoice No.</td>
<td align="right">120</td>
</tr>

</table>

</div>
<table style="width:100%;margin-top:30px;">
<tr>
<th>Description</th>
<th>Price</th>
<th>Quantity</th>
<th>Sub-Total</th>
</tr>
@foreach($posts as $post)
<tr>

<td style="width:35%;">{{$post->DepartLoc}}</td>

<td align="center">{{$post->ReturnLoc}}</td>
<td align="center">P.{{ $post->price}}</td>
<td align="center"> {{$post->PassengerNo}}</td>
</tr>

@endforeach
</table>



</div>

</div>
<table style="width:44%;float:right;margin-top:10px;margin-right:5px;">
<?php
$i=0;
?>
@foreach($flight as $post)
<?php
$i++;
?>
<tr>
<td align="center">Fee P {{($post->price*$post->PassengerNo*$i)*.029+20}}</td>
</tr>
<tr>

<td align="center">P. {{($post->price*$post->PassengerNo*$i)+(($post->price*$post->PassengerNo*$i)*.029+20)}}</td>
</tr>
@endforeach

</table>
<br><br>
<p style="  visibility: hidden;">1</p>

@include('layouts.footer')
