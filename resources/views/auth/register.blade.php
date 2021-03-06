@extends('layouts.restaurants')

@section('adwords')

<!-- Event snippet for Account Creation conversion page -->;
<script>
gtag('event', 'conversion', {
'send_to': 'AW-792677172/9mEICNmPxIkBELSW_fkC',
'transaction_id': ''
});
</script>

@endsection

@section('styles')


  <style type="text/css">
    input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0;
}
  </style>

@endsection

@section('content')
    <div style="background: #e9ecee;">
            <div class="breadcrumb" style="background: #fff;">
               <div class="container">
                  <ul>
                     <li><a href="/" class="active">Home</a></li>
                     <li>Create Account</li>
                  </ul>
               </div>
            </div>


            <section class="contact-page inner-page" style="min-height: 900px;">
               <div class="container">
                 <h2 style="font-weight: bold;margin-bottom: 22px;">Create New Account</h2>
                  <div class="row">
                     <!-- REGISTER -->
                     <div class="col-md-8">
                        <div class="widget">
                           <div class="widget-body" style="background: #fff;">
                              <form method="POST" action="{{ route('register') }}">
                                @csrf
                                 <div class="row">
                                    <div class="form-group col-sm-12">
                                       <label for="name">Full name <span style="color: red;">*</span></label>
                                       <input id="name" type="name" placeholder="Enter your full name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                         @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-sm-12">
                                       <label for="email">Email address <span style="color: red;">*</span></label>
                                       <input id="email" type="email" placeholder="Enter contact e-mail address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                         @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                      <div class="form-group col-sm-12">
                                       <label for="exampleInputPassword1">Password <span style="color: red;">*</span></label>
                                       <input id="password" type="password" placeholder="Enter a password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                       @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-sm-12">
                                       <label for="password-confirm">Confirm Password <span style="color: red;">*</span></label>
                                       <input id="password-confirm" type="password" placeholder="Enter password again" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>

                                       @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif
                                    </div>



                                    <div id="verified-phone" class="{{ old('phone') ? '' : 'hidden' }}">
                                      <div class="form-group col-sm-8">
                                         <label for="stored-phone">Phone Number</label>
                                         <input id="stored-phone" type="number" readonly=""  placeholder="Enter contact number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ old('phone') }}">





                                      </div>

                                       <div class="col-sm-4">
                                         <p style="margin-top: 32px;"> <button type="button" id="btn-change-number" class="btn theme-btn">Change Number</button> </p>
                                      </div>
                                    </div>



                                       <div id="request-otp" class="{{ old('phone') ? 'hidden' : '' }}">
                                        <div class="form-group col-sm-8">
                                           <label for="phone">Phone Number <span style="color: red;">*</span></label>
                                           <input id="phone" type="number"  placeholder="Enter contact number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}">



                                              <span id="request-feedback"  class="invalid-feedback">

                                              </span>


                                        </div>

                                         <div class="col-sm-4">
                                           <p style="margin-top: 32px;"> <button type="button" id="btn-request-otp" class="btn theme-btn">Send OTP</button> </p>
                                        </div>

                                        <div class="col-sm-12 {{ old('phone') ? '' : 'hidden' }}" >
                                         <a style="margin-top: 15px;" href="javascript:void(0)" id="btn-cancel" class="text-primary" >Cancel</a>
                                        </div>
                                      </div>





                                    <div id="verify-otp" class="hidden" >

                                      <div >
                                      <div class="col-sm-12">
                                          <h4 class="text-primary"><i class="fa fa-check-circle"></i> OTP sent to <span id="user-phone"></span></h4>
                                      </div>
                                     </div>

                                      <div class="form-group col-sm-8" style="margin-bottom: 0;">

                                         <input id="user-otp" type="number" placeholder="Enter 5-digit OTP" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="otp" >

                                              <span class="invalid-feedback" id="verify-feedback">

                                              </span>

                                      </div>

                                       <div class="col-sm-4">
                                         <p style="margin-bottom: 0;"> <button type="button" id="btn-verify-otp" class="btn theme-btn">Verify OTP</button> </p>
                                      </div>

                                      <div class="col-sm-12">
                                         <a style="margin-top: 15px;" href="javascript:void(0)" id="btn-resend-otp" class="text-primary" >Resend OTP</a>

                                      </div>
                                    </div>

                                     <div id="verified-otp" class="hidden">
                                      <div class="col-sm-12">
                                          <h4 class="text-success"><i class="fa fa-check-circle"></i> Phone Number Verified</h4>
                                      </div>
                                     </div>





                                 </div>

                             {{--    <div class="row">
                                   <div class="col-sm-8">
                                     {!! NoCaptcha::display() !!}

                                     @if ($errors->has('g-recaptcha-response'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                   </div>
                                 </div> --}}

                                 <div class="row" style="margin-top: 30px;">
                                   <div class="col-sm-8">
                                     <input type="checkbox" required="true" name="terms"> <label> I agree to the <a target="_blank" href="/terms">Terms &amp; Conditions</a> of Foodoor.</label>
                                   </div>
                                 </div>


                                 <div class="row" style="margin-top: 30px;">
                                    <div class="col-sm-8">
                                       <p> <button type="submit" id="submitButton" {{ old('phone') ? '' : 'disabled'}} class="btn theme-btn">Create Account</button>
                                       <a href="/login" class="btn" >Use Existing Account</a> </p>
                                    </div>
                                 </div>


                              </form>
                           </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                     </div>
                     <!-- WHY? -->
                     <div class="col-md-4">

                        <img src="/images/local.png" alt="" class="img-fluid">


                     </div>
                     <!-- /WHY? -->
                  </div>
               </div>
            </section>
            </div>



@endsection


@section('scripts')


  <script type="text/javascript">
    var otp = '';

    var storedPhone = '';

  $('#btn-request-otp').on('click', function()
  {
        var phone = $('#phone').val();
        if(phone.length  < 10 || phone.length > 10)
        {
            message = 'Please enter correct 10 digit mobile number!';

            $('#phone').addClass('is-invalid');

            $('#request-feedback').html('<strong>'+message+'</strong>');

        } else {

            $.post('api/phone/sendotp', {'phone':  $('#phone').val() }).then(function(response) {

              console.log(response);

              if(response.status == 'failed')
              {

                 $('#phone').addClass('is-invalid');

                 $('#request-feedback').html('<strong>'+response.message+'</strong>');

              } else {

                 otp = response.otp;

                 $('#user-phone').html('+91' + phone);

                 $('#request-otp').addClass('hidden');

                 $('#verify-otp').removeClass('hidden');

                 $('#btn-request-otp').addClass('hidden');

                 $('#request-feedback').html('');

              }
            });




        }





  });

  $('#btn-resend-otp').on('click', function()
  {


            $('#request-otp').removeClass('hidden');
            $('#btn-request-otp').removeClass('hidden');
            $('#verify-otp').val('');

            $('#request-feedback').html('');
            $('#verify-feedback').html('');

            $('#verify-otp').addClass('hidden');


        });


   $('#btn-cancel').on('click', function()
  {

            $('#verified-phone').removeClass('hidden');
            $('#request-otp').addClass('hidden');
            $('#btn-request-otp').addClass('hidden');
            $('#verify-otp').val('');

            $('#request-feedback').html('');
            $('#verify-feedback').html('');

            $('#verify-otp').addClass('hidden');

            $('#phone').val(storedPhone);


        });

  $('#btn-change-number').on('click', function()
  {
          storedPhone = $('#phone').val();

            $('#verified-phone').addClass('hidden');
            $('#request-otp').removeClass('hidden');
            $('#btn-request-otp').removeClass('hidden');

            $('#submitButton').attr('disabled', true);

            $('#request-feedback').html('');
            $('#verify-feedback').html('');




        });



  $('#btn-verify-otp').on('click', function()
  {
        //console.log(otp);
        if($('#user-otp').val() == otp)
        {


            $.post('api/phone/store', {'phone':  $('#phone').val() }).then(function(response) {

                  if(response.status == 'success')
                  {
                     $('#verify-otp').addClass('hidden');
                     $('#verified-otp').removeClass('hidden');
                     $('#verified-phone').removeClass('hidden');
                     $('#stored-phone').val($('#phone').val());
                     $('#user-otp').removeClass('is-invalid');
                     $('#submitButton').attr('disabled', false);
                  }

              });


        } else {
             message = 'Please enter correct OTP!';
             $('#user-otp').addClass('is-invalid');
             $('#verify-feedback').html('<strong>'+message+'</strong>');

        }

     });

  </script>



{!! NoCaptcha::renderJs() !!}


@endsection


