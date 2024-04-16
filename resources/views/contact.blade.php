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
   
<section id="contact" class="color-section">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>Contact us</h2>
            </div>
        </div>
        <!-- Contact -->
        <div class="col-lg-5 text-center">
            <h4>Location</h4>
            <!-- contact info -->              
            <div class="contact-info">
            </div>
            <!-- address info -->
            <h5><strong>Operational in Delhi & Gurgaon</strong></h5>
            <br/><br/>
            <!-- Map -->
            <!--
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3498.5335622001908!2d77.12124441508486!3d28.733482482378083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d013e83f635db%3A0xa0ad9660cd0f651a!2sA%2F2%2C%20Pocket%203%2C%20Sector%2016%2C%20Rohini%2C%20Delhi%2C%20110089!5e0!3m2!1sen!2sin!4v1600256818577!5m2!1sen!2sin" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                -->
        </div>
        <!-- Contact Form -->
        <div class="col-lg-6 col-lg-offset-1">
            <h4>Schedule Appointment</h4>
            <!-- Form Starts -->
            <h3 align="center"><i class="fa fa-phone margin-icon"></i><a href="tel:+919667661333">+91-9667661333</a> <br/><a href="tel:+919667550753">+91-9667550753</a></h3>
            <div class="social-media">
                <a href="https://www.facebook.com/PetMavenIndia/" target="_blank" title="facebook.com"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/petmavenindia/"  target="_blank"title="instagram.com"><i class="fa fa-instagram"></i></a>
            </div>
            <!-- Contact results -->
            <div id="contact_results"></div>
        </div>
        <!--/Contact form -->
    </div>
    <!-- /container-->
</section>
 

@include('layouts.web_footer') 
  <script src="{{asset('assets/js/jquery.validate.min.js') }}"></script>
  <script src="{{asset('assets/js/jquery.form.min.js') }}"></script>
  <script src="{{asset('assets/js/sweetalert2.min.js') }}"></script>
         