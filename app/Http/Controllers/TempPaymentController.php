<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempFlight;
use App\TempPayment;
use View;
class TempPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::orderBy('title','asc')->paginate(1);
        //$posts = Post::all();
        //$posts=Post::where('PaymentID','1')->take()->get();
        $posts=TempFlight::where('paymentID','1')->get();
        // $posts=Flight::where('paymentID','1')->get();
        $flight=TempFlight::where('paymentID','1')->take(1)->get();

      //$posts= DB::select('Select * from posts');
      return View::make('payment.payment')
                ->with(compact('posts'))
                ->with(compact('flight'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sub = $request->input('total');
        $email = $request->input('email');
        $sub1 =  1;
        $sub2 = 1;
        $sub3= 1;


    \Stripe\Stripe::setApiKey('sk_test_Q2kdLWGxvI9FvT92ePUG4mLS00JKah2okI');
    $posts=TempFlight::where('paymentID','1')->get();
        // $posts=Flight::where('paymentID','1')->get();
        $flight=TempFlight::where('paymentID','1')->take(1)->get();

      //$posts= DB::select('Select * from posts');

    try {
    // Token is created using Checkout or Elements!
    // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];
        $customer = \Stripe\Customer::create(array(
            "email"=>"paying.user@example.com",
            "source"=> $token,
        ));
        $total=$sub*100;
        $charge = \Stripe\Charge::create(array(
            "amount"=> $total,
            "currency" => "php",
            'description' => 'Airline',
            "customer" => $customer->id
        ));

        // $charge = \Stripe\Charge::create([
        //     'amount' => 1000,
        //     'currency' => 'usd',
        //     'description' => 'Example charge',
        //     'source' => $token,
        //     ]);
        $Payment= new TempPayment;
        $Payment->CustomerID =$sub2;
        $Payment->flightID =$sub2;
        $Payment->status = $sub2;
        $Payment->stripe_id = $customer->id;
        //here
        $Payment->email = $email;
        $Payment->NameOnCard = $request->input('NameonCard');
        $Payment->contact = $request->input('contact');
        $Payment->tax = $request->input('tax');
        $Payment->total = $request->input('total');


        $Payment->save();
        return View::make('payment.reciept')
        ->with(compact('posts'))
        ->with(compact('flight'));



    } catch (\Stripe\Error\Card $e) {
        return back()->with('error','Card Declined');

    } catch (\Stripe\Error\InvalidRequest $e) {
        return back()->with('error','Invalid Request');

    } catch (\Stripe\Error\Authentication $e) {
        return back()->with('error','Authentication Failed');

    } catch (\Stripe\Error\ApiConnection $e) {
        return back()->with('error','There was an error processing your request. ');
    } catch (\Stripe\Error\Base $e) {
        return back()->with('error','There was an error processing your request. ');

    } catch (Exception $e) {
        return back()->with('error','There was an error processing your request. ');

    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
