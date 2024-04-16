      <style>
     
     @media (max-width: 767px) {
         form {
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0px 5px !important;
    height: 100%;
    text-align: center;
}
h1 {
    font-size: 22px !important;
    line-height: 1 !important;
}
button {
    border-radius: 20px;
    border: 1px solid #d12881;
    background-color: #d12881;
    color: #fff;
    font-size: 12px !important;
    font-weight: 700;
    padding: 11px 20px !important;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
}

img.googlelogin {
    max-width: 170px !important;
    cursor: pointer !important;
    margin-top: 10px !important;
}
.social-container a {
    border: none !important;
}
}
img.googlelogin {
    width: 250px !important;
    cursor: pointer !important;
    margin-top: 10px !important;
}
.social-container a {
    border: none !important;
}

     </style>
     @include('layouts.web_header')
   

      <link href="{{asset('assets/css/loginstyle.css') }}" rel="stylesheet">
 
         <!-- Slider -->
         <section class="containerss d-flex justify-content-center" style="margin-top: 12%; margin-bottom: 10%; width: 100%; margin-left: auto; margin-right: auto;">
        
    
 
 <div class="containers" id="containers">
  <div class="form-container sign-up-container">
    <form  class="user-form" method="post" action="{{route('userRegistration')}}">
      @csrf
      
      <h1>Create Account</h1>
      <span>or use your email for registration</span>
      <div class="d-grid">
        <b class="errorText text-danger"></b>
      </div>
      <input type="text"  name="name" required="" placeholder="Name" />
      <input type="email" name="email" required="" placeholder="Email" />
      <input type="number" name="mobile" required="" placeholder="Mobile No." />
      <input type="password" name="password" required="" placeholder="Password" />
      <button type="submit">Sign Up</button>
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form class="form-body login-form" method="post" action="{{route('authCheck')}}">
     @csrf
      <div class="d-grid">
        <b class="errorText text-danger"></b>
      </div>
      <h1>Sign in</h1>
      <div class="social-container">
        <a href="{{ route('auth/google') }}" class="social"><img class="googlelogin" src="{{asset('assets/img/logingoole.png') }}" alt="" " ></a>
      </div>
      <span>or use your account</span>
      <input type="email" name="email" id="inputEmailAddress" placeholder="Email" />
      <input type="password" name="password" id="inputChoosePassword"  placeholder="Password" />
      <a href="#">Forgot your password?</a>
      <button type="submit">Sign In</button>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Welcome Back!</h1>
        <p>To keep connected with us please login with your personal info</p>
        <button class="ghost" id="signIn">Sign In</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Hello, Pet Parent</h1>
        <p>Enter your personal details and start journey with us</p>
        <button class="ghost" id="signUp">Sign Up</button>
      </div>
    </div>
  </div>
</div>

</section>    
@include('layouts.web_footer') 
  <script src="{{asset('assets/js/jquery.validate.min.js') }}"></script>
  <script src="{{asset('assets/js/jquery.form.min.js') }}"></script>
  <script src="{{asset('assets/js/sweetalert2.min.js') }}"></script>
  <script type="text/javascript">
    $( document ).ready(function() {

     $( ".user-form" ).validate({
                errorElement: "p",
                errorPlacement: function ( error, element ) {
                    if ( element.prop("tagName").toLowerCase() === "select" ) {
                        error.insertAfter( element.closest( ".form-group" ).find(".select2") );
                    } else {
                        error.insertAfter( element );
                        $
                    }
                },
                submitHandler: function () {
                    var form = $('.user-form');
                    form.ajaxSubmit({
                        dataType:'json',
                        beforeSubmit:function(){
                            swal({
                                title: 'Wait!',
                                text: 'Processing......',
                                onOpen: () => {
                                    swal.showLoading()
                                },
                                allowOutsideClick: () => !swal.isLoading()
                            });
                        },
                        success:function(data){
                            swal.close();
                            if(data.status == "added"){
                                swal({
                                    type: 'success',
                                    title : 'Success',
                                    text: 'User Registration Successfully Done.',
                                    showConfirmButton: false,
                                    timer: 2000,
                                    onClose: () => {
                                        window.location.href = '{{ route("login") }}';
                                    },
                                });
                            }
                        },
                        error: function(errors) {
                            swal.close();
                            if(errors.status == '400'){
                                $('b.errorText').text(errors.responseJSON.status);
                                setTimeout(function(){
                                    $('b.errorText').text('');
                                }, 5000);
                            }else{
                                $('b.errorText').text('Something went wrong, try again later.');
                                setTimeout(function(){
                                    $('b.errorText').text('');
                                }, 5000);
                            }
                        }
                    });
                }
            });

      $( ".login-form" ).validate({
                rules: {
                    email: {
                        required: true
                    },
                    password: {
                        required: true,
                    }
                },
                messages: {
                    email: {
                        required: "Please enter valid email"
                    },
                    password: {
                        required: "Please enter password",
                    }
                },
                errorElement: "p",
                errorPlacement: function ( error, element ) {
                    if ( element.prop("tagName").toLowerCase() === "select" ) {
                        error.insertAfter( element.closest( ".form-group" ).find(".select2") );
                    } else {
                        error.insertAfter( element );
                        $
                    }
                },
                submitHandler: function () {
                    var form = $('.login-form');
                    form.ajaxSubmit({
                        dataType:'json',
                        beforeSubmit:function(){
                            swal({
                                title: 'Wait!',
                                text: 'We are checking your login credential',
                                onOpen: () => {
                                    swal.showLoading()
                                },
                                allowOutsideClick: () => !swal.isLoading()
                            });
                        },
                        success:function(data){
                            swal.close();
                            if(data.status == "Login"){
                                swal({
                                    type: 'success',
                                    title : 'Success',
                                    text: 'Successfully logged in.',
                                    showConfirmButton: false,
                                    timer: 2000,
                                    onClose: () => {
                                        window.location.href = '{{ route("dashboard") }}';
                                    },
                                });
                            }else if(data.status == "otpsent" || data.status == "preotp"){
                                $('div.formdata').append(`<div class="form-group has-feedback has-feedback-left">
                                <input type="password" class="form-control" placeholder="Enter Otp" name="otp" required>
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                                <a href="javascript:void(0)" onclick="OTPRESEND()" class="text-primary pull-right">Resend Otp</a>
                                <div class="clearfix"></div>
                            </div> `);

                                if(data.status == "preotp"){
                                    $('b.successText').text('Please use previous otp sent on your mobile.');
                                    setTimeout(function(){
                                        $('b.successText').text('');
                                    }, 5000);
                                }
                            }
                        },
                        error: function(errors) {
                            swal.close();
                            if(errors.status == '400'){
                                $('b.errorText').text(errors.responseJSON.status);
                                setTimeout(function(){
                                    $('b.errorText').text('');
                                }, 3000);
                            }else{
                                $('b.errorText').text('Something went wrong, try again later.');
                                setTimeout(function(){
                                    $('b.errorText').text('');
                                }, 3000);
                            }
                        }
                    });
                }
            });
    });
  </script>        