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
   

     <!-- Section About -->
<section id="about" class="color-section">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>About us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-5">
                <!-- Carousel -->
                <div id="owl-about" class="owl-carousel">
                    <div class="item">
                        <img class="img-responsive" src="{{asset('assets/img/about2.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{asset('assets/img/about1.jpg') }}" alt="">
                    </div>
                    <div class="item">
                        <img class="img-responsive" src="{{asset('assets/img/about3.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <!-- text -->
            <div class="col-lg-7 col-sm-12">
                <br/>
                <p style="font-weight:500;"><strong>Pet Maven</strong> is a mobile pet grooming service that grooms your pet at the convenience of your home or office. When you make an appointment with Pet Maven, your furry companion never leaves the view of your home.</p>
                <p style="font-weight:500;">It’s simple! We drive in our fully equipped mobile grooming studio to your home and professionally groom your pet. We schedule a limited number of pets per day. This ensures that our professional pet groomers take gentle care of your pet and give a personalized experience to you and fur baby. </p>
                <br/>
            </div>
            <!-- /col-lg-8 -->
        </div>
    </div>
    <!--/container-->     
</section>
<!--/ Section ends -->
<!-- Section Callout -->
<section id="callout" class="small-section">
    <!-- Clouds background -->
    <div class="hidden-xs">
        <div class="cloud x1"></div>
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
        <div class="cloud x6"></div>
        <div class="cloud x7"></div>
    </div>
    <!-- /Clouds ends -->
    <div class="container">
        <!-- Animated Sun -->
        <div class="sun hidden-sm hidden-xs">
            <div class="sun-face">
                <div class="sun-hlight"></div>
                <div class="sun-leye"></div>
                <div class="sun-reye"></div>
                <div class="sun-lred"></div>
                <div class="sun-rred"></div>
                <div class="sun-smile"></div>
            </div>
            <!-- Sun rays -->
            <div class="sun-anime">
                <div class="sun-ball"></div>
                <div class="sun-light"><b></b><s></s>                     </div>
                <div class="sun-light"><b></b><s></s>                     </div>
                <div class="sun-light"><b></b><s></s>                     </div>
                <div class="sun-light"><b></b><s></s>                     </div>
                <div class="sun-light"><b></b><s></s>                     </div>
                <div class="sun-light"><b></b><s></s>                     </div>
                <div class="sun-light"><b></b><s></s>                     </div>
                <div class="sun-light"><b></b><s></s>                     </div>
                <div class="sun-light"><b></b><s></s>                     </div>
                <div class="sun-light"><b></b><s></s>                     </div>
                <div class="sun-light"><b></b><s></s>                     </div>
                <div class="sun-light"><b></b><s></s>                     </div>
            </div>
        </div>
        <!-- /Animated Sun -->
        <div class="col-md-6 col-sm-6 text-center">
            <div class="well">
                <h3>Our Mission</h3>
                <p>We aim to deliver the best grooming experience for you and your pet, right at your doorstep. Our pets are part of our families and they deserve  to be pampered once in a while and we at Pet Maven would love to make the moment worth it.</p>
                <div class="page-scroll">
                    <!-- Button-->
                    <a class="btn" href="#contact">Contact us</a>                     
                </div>
                <!-- /page-scroll -->
            </div>
            <!-- /well -->
        </div>
        <!-- /col-md-6 -->
    </div>
    <!-- /container-->
</section>
<!-- Section Ends-->
<!-- Section Services -->
<section id="services" class="color-section">
    <div class="container">
        <div class="col-lg-8 col-lg-offset-2">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>WHY US</h2>
            </div>
        </div>
        <div class="row">
            <!-- main text -->
            <div class="col-md-12 col-lg-7 text-center">
                <!--<h6 class="text-center">WE TAKE CARE OF YOUR FUR BABY'S @ </h6>
                    <h3 class="text-center">LUXURY MOBILE PET SPA</h3>-->
                <div align="left">
                    <ul>
                        <li> Your pet will get <strong>individualized, one-on-one attention</strong> the whole time</li>
                        <li> <strong>Our mobile studio is fully equipped</strong> with all the amenities like full size tub & grooming table, hot and cold running water in temperature controlled environment</li>
                        <li>Our <strong>experienced groomers</strong> know your pets’ need as each pet is unique (Choice of products and type of service)</li>
                        <li> <strong>No separation anxiety or car sickness</strong> for your pet as we come right at your doorstep</li>
                        <li> <strong>Less stress for your dog </strong> , no noisy shop environment.</li>
                        <li> <strong>Convenience</strong> (we come to your home or office saving your valuable time and money).</li>
                        <li> <strong>No mess for you </strong> ,(our equipment quickly cleans up after each grooming session).</li>
                        <li> <strong>Safer for your pet’s health  </strong> ,(equipment is completely sanitized, minimizing the risk of your pet coming into contact with other pets or individuals).</li>
                    </ul>
                </div>
            </div>
            <!-- /col-sm-12-->
            <div class="col-md-12 col-lg-5">
                <!-- Image -->
                <img src="{{asset('assets/img/services.png') }}" alt="" class="img-responsive center-block">
            </div>
            <!-- /col-md-12-->
        </div>
        <!-- /row
            <div class="row">
            
              
            
               <div class="col-md-4 col-sm-12">
            
                  <div class="service float">
            
                     <img src="img/service1.jpg" alt="" class="img-circle center-block img-responsive">
            
                     <h4>Bath</h4>
            
                     <p>Our Bathing services will leave your fur-baby squeaky clean, smelling great and feeling happy!</p>
            
                  </div>
            
               </div>
            
              
            
               <div class="col-md-4 col-sm-12 res-margin">
            
                  <div class="service float">
            
                     <img src="img/service2.jpg" alt="" class="img-circle center-block  img-responsive">
            
                     <h4>Grooming</h4>
            
                     <p>Our Groomers provide full coat clippings, detangling, nail trimming and more! All grooming services include a detailed wash.</p>
            
                  </div>
            
               </div>
            
               
            
               <div class="col-md-4 col-sm-12">
            
                  <div class="service float">
            
                     <img src="img/service3.jpg" alt="" class="img-circle center-block img-responsive">
            
                     <h4>Tick & Flea</h4>
            
                     <p>Medicated Bath, Drying, Tick Removal by Hand, Clip Nails, Sanitary Clipping, Teeth Cleaning, Ear Cleaning</p>
            
                  </div>
            
               </div>
            
             
            
            </div> -->
    </div>
</section>
<!-- /Section ends -->
 

@include('layouts.web_footer') 
  <script src="{{asset('assets/js/jquery.validate.min.js') }}"></script>
  <script src="{{asset('assets/js/jquery.form.min.js') }}"></script>
  <script src="{{asset('assets/js/sweetalert2.min.js') }}"></script>
         