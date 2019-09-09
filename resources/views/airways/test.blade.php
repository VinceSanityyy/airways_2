<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
    <body>
    <button  data-toggle="modal" data-target="#myModal" class="btn btn-primary"><img src="{{asset('image/bank.png')}}" height="25" style="padding-right:8px;"><font color="gold">ORO</font> <small>Checkout</small></button><br>

                    <div id="paypal-button"></div>

                    <div class="container">
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><img src="{{asset('image/bank.png')}}" height="25" style="padding-right:8px;">ORO Airways  <span style="float:right;"><i class="fa fa-shopping-cart"></i></span></h4>

        </div>
        <div class="modal-body">
          <p>Hi, User123<span style="float:right;">ORO Balance:100 </span></p>
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
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Pay</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>

</div>


<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script>
  paypal.Button.render({
    env: 'sandbox', // Or 'production'
    style: {
      size: 'large',
      color: 'gold',
      shape: 'pill',
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
    </body>
</html>
