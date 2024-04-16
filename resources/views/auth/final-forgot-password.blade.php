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
         <section class="containerss d-flex justify-content-center" style="margin-top: 12%; margin-bottom: 10%; width: 31%; margin-left: auto; margin-right: auto;">
        
    
 
 <div class="containers" id="containers">
  <div class="form-container" style="left: 0;width: 100%; z-index: 2;" >
    <form class="form-body user-form" method="post" action="{{route('forgotPasswordData2')}}">
     @csrf
     
      <h4>Forgot   Password</h4>
      
       <div class="d-grid">
        <b class="errorText text-danger"></b>
      </div>
      <input type="password" required="" name="newPassword" id="inputEmailAddress" placeholder="newPassword" />
      <input type="password" required="" name="confirmPassword" id="inputEmailAddress" placeholder="confirmPassword" />
       <input type="hidden" name="user_id" value="{{$user_id}}">
      <button type="submit">Submit</button>
    </form>
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
                            if(data.status == "Login"){
                                swal({
                                    type: 'success',
                                    title : 'Success',
                                    text: 'Forgot Password Successfully Done.',
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

     
    });
  </script>        