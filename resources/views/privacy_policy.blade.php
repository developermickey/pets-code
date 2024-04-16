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
     <h1>Privacy Policy</h1>   
  <p style="text-align: justify;"><span style="font-weight: 400;">At Pet Maven, we take your privacy seriously. We only collect the information necessary to register your pet, and we never share your data with any third party. We are committed to protecting your personal information and ensuring that it is kept confidential.</span><span style="font-weight: 400;"><br /></span><span style="font-weight: 400;"><br /></span><span style="font-weight: 400;">What information do we collect?</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;">When you sign up for pet registration, we collect your name, address, phone number, email address, and pet's information. This information is required for us to register your pet and ensure that we can provide you with the best possible service.</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;"><br /></span><span style="font-weight: 400;">How do we use your information?</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;">We use the information that you provide us to register your pet and to communicate with you about any important updates or changes to your pet's registration status. We may also use your information to send you promotional emails about our services or special offers that we think you may be interested in.</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;">Do we share your information with anyone else?</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;">No, we never share your information with any third party. We only use your information for the purpose of registering your pet and providing you with the best possible service. Your privacy is important to us, and we are committed to protecting your personal information.</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;"><br /></span><span style="font-weight: 400;">How can you access or update your information?</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;">You can request to access or update your information at any time by contacting us at [your contact email or phone number]. We will be happy to provide you with any information that you need, and we will work with you to ensure that your personal information is accurate and up to date.</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;"><br /></span><span style="font-weight: 400;">Changes to our privacy policy</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;">We reserve the right to make changes to our privacy policy at any time. Any updates or changes will be posted on this page, so please check back frequently to stay informed.</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;">If you have any questions about our privacy policy or how we use your personal information, please do not hesitate to contact us. We are always happy to help and ensure that your privacy is protected.</span></p>
 

</section>    
@include('layouts.web_footer') 
  <script src="{{asset('assets/js/jquery.validate.min.js') }}"></script>
  <script src="{{asset('assets/js/jquery.form.min.js') }}"></script>
  <script src="{{asset('assets/js/sweetalert2.min.js') }}"></script>
         