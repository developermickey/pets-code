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

          <h1>Refund Policy</h1>
        
        <p style="text-align: justify;"><strong>Cancellation and Refund Policy</strong></p>
<p style="text-align: justify;"><span style="font-weight: 400;">At www.petmaven.in, we strive to provide our customers with the best possible service for pet registration. If for any reason you are not satisfied with our services, we offer a cancellation and refund policy as follows:</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;">Cancellation: If you wish to cancel your pet registration, you must do so within 24 hours of the initial registration. To cancel, please contact us at info@petmaven.in or 9667550753 and provide your registration details. Once we receive your cancellation request, we will process it and send you a confirmation email.</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;">Refund: If you cancel your registration within the 24-hour period, we will refund your payment in full. If you cancel after the 24-hour period, we will not be able to provide a refund.</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;">Exceptions: We may make exceptions to our cancellation and refund policy in cases of extenuating circumstances, such as a medical emergency or other unforeseen event. In these cases, please contact us immediately to discuss your situation and we will do our best to accommodate you.</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;">Processing Time: Refunds may take up to 7 business days to process, depending on your payment method and financial institution.</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;">Contact Us: If you have any questions about our cancellation and refund policy, please contact us at info@petmaven.in or 9667550753. We are always happy to help and ensure that our customers are satisfied with our services.</span></p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;"><span style="font-weight: 400;">By using our services, you acknowledge that you have read and agree to our cancellation and refund policy. If you have any questions or concerns about our policy or your registration, please do not hesitate to contact us.</span></p>
    

       </section>    
@include('layouts.web_footer') 
  <script src="{{asset('assets/js/jquery.validate.min.js') }}"></script>
  <script src="{{asset('assets/js/jquery.form.min.js') }}"></script>
  <script src="{{asset('assets/js/sweetalert2.min.js') }}"></script>
         