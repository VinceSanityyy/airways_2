<!DOCTYPE html>
<html lang="en">
   <head>

      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

      <title>Quickai - Recharge & Bill Payment, Booking HTML5 Template</title>
      <meta name="description" content="Quickai - Recharge & Bill Payment, Booking HTML5 Template">
      <meta name="author" content="harnishdesign.net">
     @include('layouts.styles')
     @include('layouts.scripts')
   </head>
   <body>
      <!-- Preloader -->
      <div id="preloader">
         <div data-loader="dual-ring"></div>
      </div>
      <!-- Preloader End -->
      <!-- Document Wrapper
         ============================================= -->
      <div id="main-wrapper">



      <!-- Header
         ============================================= -->
        @include('layouts.header')
      <!-- Header end -->




      <!-- Content
         ============================================= -->
      <div id="content">
      <div class="hero-wrap py-2 py-md-3 py-lg-5">
         <div class="hero-mask opacity-3 bg-dark"></div>
         <div class="hero-bg" style="background-image:url('./images/bg/image-2.jpg');"></div>


         <div class="hero-content py-3 py-lg-5 my-3 my-md-5">

            <div class="container">
                    @include('airways.searchbar')
            </div>
         </div>

         <!-- Content end -->
         @include('layouts.footer')
      </div>
      <!-- Document Wrapper end -->
      <!-- Back to Top
         ============================================= -->
      <a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i class="fa fa-chevron-up"></i></a>
      <!-- Modal Dialog - Login/Signup
         ============================================= -->
      <div id="login-signup" class="modal fade" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content p-sm-3">
               <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="nav-item"> <a id="login-tab" class="nav-link active text-4" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a> </li>
                     <li class="nav-item"> <a id="signup-tab" class="nav-link text-4" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign Up</a> </li>
                  </ul>
                  <div class="tab-content pt-4">
                     <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                        <form id="loginForm" method="post">
                           <div class="form-group">
                              <input type="email" class="form-control" id="loginMobile" required placeholder="Mobile or Email ID">
                           </div>
                           <div class="form-group">
                              <input type="password" class="form-control" id="loginPassword" required placeholder="Password">
                           </div>
                           <div class="row mb-4">
                              <div class="col-sm">
                                 <div class="form-check custom-control custom-checkbox">
                                    <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
                                    <label class="custom-control-label" for="remember-me">Remember Me</label>
                                 </div>
                              </div>
                              <div class="col-sm text-right"> <a class="justify-content-end" href="#">Forgot Password ?</a> </div>
                           </div>
                           <button class="btn btn-primary btn-block" type="submit">Login</button>
                        </form>
                     </div>
                     <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                        <form id="signupForm" method="post">
                           <div class="form-group">
                              <input type="text" class="form-control" data-bv-field="number" id="signupEmail" required placeholder="Email ID">
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" id="signupMobile" required placeholder="Mobile Number">
                           </div>
                           <div class="form-group">
                              <input type="password" class="form-control" id="signuploginPassword" required placeholder="Password">
                           </div>
                           <button class="btn btn-primary btn-block" type="submit">Signup</button>
                        </form>
                     </div>
                     <div class="d-flex align-items-center my-4">
                        <hr class="flex-grow-1">
                        <span class="mx-2">OR</span>
                        <hr class="flex-grow-1">
                     </div>
                     <div class="row">
                        <div class="col-12 mb-3">
                           <button type="button" class="btn btn-block btn-outline-primary">Login with Facebook</button>
                        </div>
                        <div class="col-12">
                           <button type="button" class="btn btn-block btn-outline-danger">Login with Google</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Modal Dialog - Login/Signup end -->

   </body>
</html>
