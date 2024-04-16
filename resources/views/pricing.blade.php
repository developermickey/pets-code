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
   

 <section id="about" class="color-section">
            <div class="container">
               <div class="col-lg-8 col-lg-offset-2">
                  <!-- Section heading -->
                  <div class="section-heading">
                     <h2> OUR PRICES</h2>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12 col-lg-12">
                     <!-- Carousel -->
                     
                       <img src="{{asset('assets/img/pricing/price-slide_1.jpg')}}" width="100%"><br/><br/>
                       <img src="{{asset('assets/img/pricing/price-slide_2.jpg')}}"width="100%"><br/><br/>
                       <img src="{{asset('assets/img/pricing/price-slide_3.jpg')}}" width="100%"><br/><br/>
                       <img src="{{asset('assets/img/pricing/price-slide_4.jpg')}}" width="100%"><br/><br/>
                       <img src="{{asset('assets/img/pricing/price-slide_5.jpg')}}" width="100%"><br/><br/>
                       <img src="{{asset('assets/img/pricing/price-slide_6.jpg')}}" width="100%"><br/><br/>
                       <img src="{{asset('assets/img/pricing/price-slide_7.jpg')}}" width="100%"><br/><br/>
                       <img src="{{asset('assets/img/pricing/price-slide_8.jpg')}}" width="100%"><br/><br/>
                       <img src="{{asset('assets/img/pricing/price-slide_9.jpg')}}" width="100%"><br/><br/>
                         
                  </div>
                  <!-- text -->
                  
                  <!-- /col-lg-8 -->
               </div>
               <!-- /row -->
               
               
               <div class="col-lg-8 col-lg-offset-2">
                  <!-- Section heading -->
                  
               </div>
               <div class="row">
                  <div class="col-sm-12 col-lg-12">
                     <!-- Carousel -->
                       <img src="{{asset('assets/img/pricing/price-slide_10.jpg')}}" width="100%"><br/><br/>
                       <img src="{{asset('assets/img/pricing/price-slide_11.jpg')}}" width="100%"><br/><br/>
                    
                         
                  </div>
                  <!-- text -->
                  
                  <!-- /col-lg-8 -->
               </div>
               
           
               
               <!--/owl-team -->
               <!-- /col-lg-7 -->
            </div>
                
            <!--/container-->     
         </section>
 

@include('layouts.web_footer') 
  <script src="{{asset('assets/js/jquery.validate.min.js') }}"></script>
  <script src="{{asset('assets/js/jquery.form.min.js') }}"></script>
  <script src="{{asset('assets/js/sweetalert2.min.js') }}"></script>
         