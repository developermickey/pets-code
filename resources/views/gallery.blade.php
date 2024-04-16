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
   

 <!-- Section Gallery -->
         <section id="gallery" class="color-section">
            <!-- svg triangle shape -->
            <svg class="triangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
               <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
            </svg>
            <div class="container">
               <!-- Section heading -->
               <div class="section-heading">
                  <h2>Our Gallery</h2>
               </div>
               <!-- Navigation -->
            
               <!-- Gallery -->
               <div class="row">
                  <div class="col-md-12">
                     <div id="lightbox">
                        <!-- Image 1 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 events">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/gallery1.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/gallery1.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 2 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/gallery2.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/gallery2.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/gallery3.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/gallery3.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 4 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 events">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/gallery4.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/gallery4.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>


                        </div>
                        <!-- Image 5 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/gallery5.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/gallery5.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 6 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/gallery6.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/gallery6.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 7 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 events">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/gallery7.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/gallery7.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 8 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 events">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/gallery8.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/gallery8.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 9 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/gallery9.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/gallery9.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 10 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 events">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/g1.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/g1.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 11 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 events">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/g2.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/g2.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 12 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/g3.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/g3.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>

                         <!-- Image 13 -->
                         <div class="col-sm-6 col-md-6 col-lg-4 events">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/g4.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/g4.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 14 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 events">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/g5.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/g5.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 15 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/g6.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/g6.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>

                          <!-- Image 13 -->
                          <div class="col-sm-6 col-md-6 col-lg-4 events">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/g7.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/g7.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 14 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 events">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/g8.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/g8.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                        <!-- Image 15 -->
                        <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                           <div class="portfolio-item">
                              <div class="gallery-thumb">
                                 <img class="img-responsive" src="{{asset('assets/img/g9.jpg')}}" alt="">
                                 <span class="overlay-mask"></span>
                                 <a href="{{asset('assets/img/g9.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                 <i class="fa fa-expand"></i></a>
                              </div>
                           </div>
                        </div>
                           <!-- Image 16 -->
                           <div class="col-sm-6 col-md-6 col-lg-4 events">
                              <div class="portfolio-item">
                                 <div class="gallery-thumb">
                                    <img class="img-responsive" src="{{asset('assets/img/g10.jpg')}}" alt="">
                                    <span class="overlay-mask"></span>
                                    <a href="{{asset('assets/img/g10.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!-- Image 17 -->
                           <div class="col-sm-6 col-md-6 col-lg-4 events">
                              <div class="portfolio-item">
                                 <div class="gallery-thumb">
                                    <img class="img-responsive" src="{{asset('assets/img/g11.jpg')}}" alt="">
                                    <span class="overlay-mask"></span>
                                    <a href="{{asset('assets/img/g11.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!-- Image 18 -->
                           <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                              <div class="portfolio-item">
                                 <div class="gallery-thumb">
                                    <img class="img-responsive" src="{{asset('assets/img/g12.jpg')}}" alt="">
                                    <span class="overlay-mask"></span>
                                    <a href="{{asset('assets/img/g12.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                                 </div>
                              </div>
                           </div>
                             <!-- Image 19 -->
                             <div class="col-sm-6 col-md-6 col-lg-4 events">
                              <div class="portfolio-item">
                                 <div class="gallery-thumb">
                                    <img class="img-responsive" src="{{asset('assets/img/g13.jpg')}}" alt="">
                                    <span class="overlay-mask"></span>
                                    <a href="{{asset('assets/img/g13.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!-- Image 20 -->
                           <div class="col-sm-6 col-md-6 col-lg-4 events">
                              <div class="portfolio-item">
                                 <div class="gallery-thumb">
                                    <img class="img-responsive" src="{{asset('assets/img/g14.jpg')}}" alt="">
                                    <span class="overlay-mask"></span>
                                    <a href="{{asset('assets/img/g14.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                                 </div>
                              </div>
                           </div>
                           <!-- Image 21 -->
                           <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                              <div class="portfolio-item">
                                 <div class="gallery-thumb">
                                    <img class="img-responsive" src="{{asset('assets/img/g15.jpg')}}" alt="">
                                    <span class="overlay-mask"></span>
                                    <a href="{{asset('assets/img/g15.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                    <i class="fa fa-expand"></i></a>
                                 </div>
                              </div>
                           </div>
                               <!-- Image 22 -->
                               <div class="col-sm-6 col-md-6 col-lg-4 events">
                                 <div class="portfolio-item">
                                    <div class="gallery-thumb">
                                       <img class="img-responsive" src="{{asset('assets/img/g16.jpg')}}" alt="">
                                       <span class="overlay-mask"></span>
                                       <a href="{{asset('assets/img/g16.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                       <i class="fa fa-expand"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <!-- Image 23 -->
                              <div class="col-sm-6 col-md-6 col-lg-4 events">
                                 <div class="portfolio-item">
                                    <div class="gallery-thumb">
                                       <img class="img-responsive" src="{{asset('assets/img/g17.jpg')}}" alt="">
                                       <span class="overlay-mask"></span>
                                       <a href="{{asset('assets/img/g17.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                       <i class="fa fa-expand"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <!-- Image 24 -->
                              <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                                 <div class="portfolio-item">
                                    <div class="gallery-thumb">
                                       <img class="img-responsive" src="{{asset('assets/img/g18.jpg')}}" alt="">
                                       <span class="overlay-mask"></span>
                                       <a href="{{asset('assets/img/g18.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                       <i class="fa fa-expand"></i></a>
                                    </div>
                                 </div>
                              </div>
                                   <!-- Image 25 -->
                                   <div class="col-sm-6 col-md-6 col-lg-4 events">
                                    <div class="portfolio-item">
                                       <div class="gallery-thumb">
                                          <img class="img-responsive" src="{{asset('assets/img/g19.jpg')}}" alt="">
                                          <span class="overlay-mask"></span>
                                          <a href="{{asset('assets/img/g19.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                          <i class="fa fa-expand"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Image 26 -->
                                 <div class="col-sm-6 col-md-6 col-lg-4 events">
                                    <div class="portfolio-item">
                                       <div class="gallery-thumb">
                                          <img class="img-responsive" src="{{asset('assets/img/g20.jpg')}}" alt="">
                                          <span class="overlay-mask"></span>
                                          <a href="{{asset('assets/img/g20.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                          <i class="fa fa-expand"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Image 27 -->
                                 <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                                    <div class="portfolio-item">
                                       <div class="gallery-thumb">
                                          <img class="img-responsive" src="{{asset('assets/img/g21.jpg')}}" alt="">
                                          <span class="overlay-mask"></span>
                                          <a href="{{asset('assets/img/g21.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                          <i class="fa fa-expand"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                      <!-- Image 28 -->
                                      <div class="col-sm-6 col-md-6 col-lg-4 events">
                                       <div class="portfolio-item">
                                          <div class="gallery-thumb">
                                             <img class="img-responsive" src="{{asset('assets/img/g22.jpg')}}" alt="">
                                             <span class="overlay-mask"></span>
                                             <a href="{{asset('assets/img/g22.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                             <i class="fa fa-expand"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Image 29 -->
                                    <div class="col-sm-6 col-md-6 col-lg-4 events">
                                       <div class="portfolio-item">
                                          <div class="gallery-thumb">
                                             <img class="img-responsive" src="{{asset('assets/img/g23.jpg')}}" alt="">
                                             <span class="overlay-mask"></span>
                                             <a href="{{asset('assets/img/g23.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                             <i class="fa fa-expand"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Image 30 -->
                                    <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                                       <div class="portfolio-item">
                                          <div class="gallery-thumb">
                                             <img class="img-responsive" src="{{asset('assets/img/g24.jpg')}}" alt="">
                                             <span class="overlay-mask"></span>
                                             <a href="{{asset('assets/img/g24.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                             <i class="fa fa-expand"></i></a>
                                          </div>
                                       </div>
                                    </div>
                                        <!-- Image 31 -->
                                        <div class="col-sm-6 col-md-6 col-lg-4 events">
                                          <div class="portfolio-item">
                                             <div class="gallery-thumb">
                                                <img class="img-responsive" src="{{asset('assets/img/g25.jpg')}}" alt="">
                                                <span class="overlay-mask"></span>
                                                <a href="{{asset('assets/img/g25.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                                <i class="fa fa-expand"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Image 32 -->
                                       <div class="col-sm-6 col-md-6 col-lg-4 events">
                                          <div class="portfolio-item">
                                             <div class="gallery-thumb">
                                                <img class="img-responsive" src="{{asset('assets/img/g26.jpg')}}" alt="">
                                                <span class="overlay-mask"></span>
                                                <a href="{{asset('assets/img/g26.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                                <i class="fa fa-expand"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Image 33 -->
                                       <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                                          <div class="portfolio-item">
                                             <div class="gallery-thumb">
                                                <img class="img-responsive" src="{{asset('assets/img/g27.jpg')}}" alt="">
                                                <span class="overlay-mask"></span>
                                                <a href="{{asset('assets/img/g27.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                                <i class="fa fa-expand"></i></a>
                                             </div>
                                          </div>
                                       </div>
                                          <!-- Image 34 -->
                                          <div class="col-sm-6 col-md-6 col-lg-4 events">
                                             <div class="portfolio-item">
                                                <div class="gallery-thumb">
                                                   <img class="img-responsive" src="{{asset('assets/img/g28.jpg')}}" alt="">
                                                   <span class="overlay-mask"></span>
                                                   <a href="{{asset('assets/img/g28.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                                   <i class="fa fa-expand"></i></a>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Image 35 -->
                                          <div class="col-sm-6 col-md-6 col-lg-4 events">
                                             <div class="portfolio-item">
                                                <div class="gallery-thumb">
                                                   <img class="img-responsive" src="{{asset('assets/img/g29.jpg')}}" alt="">
                                                   <span class="overlay-mask"></span>
                                                   <a href="{{asset('assets/img/g29.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                                   <i class="fa fa-expand"></i></a>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Image 36 -->
                                          <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                                             <div class="portfolio-item">
                                                <div class="gallery-thumb">
                                                   <img class="img-responsive" src="{{asset('assets/img/g30.jpg')}}" alt="">
                                                   <span class="overlay-mask"></span>
                                                   <a href="{{asset('assets/img/g30.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                                   <i class="fa fa-expand"></i></a>
                                                </div>
                                             </div>
                                          </div>
                                            <!-- Image 37 -->
                                            <div class="col-sm-6 col-md-6 col-lg-4 events">
                                             <div class="portfolio-item">
                                                <div class="gallery-thumb">
                                                   <img class="img-responsive" src="{{asset('assets/img/g31.jpg')}}" alt="">
                                                   <span class="overlay-mask"></span>
                                                   <a href="{{asset('assets/img/g31.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                                   <i class="fa fa-expand"></i></a>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Image 38 -->
                                          <div class="col-sm-6 col-md-6 col-lg-4 events">
                                             <div class="portfolio-item">
                                                <div class="gallery-thumb">
                                                   <img class="img-responsive" src="{{asset('assets/img/g32.jpg')}}" alt="">
                                                   <span class="overlay-mask"></span>
                                                   <a href="{{asset('assets/img/g32.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                                   <i class="fa fa-expand"></i></a>
                                                </div>
                                             </div>
                                          </div>
                                          <!-- Image 39 -->
                                          <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                                             <div class="portfolio-item">
                                                <div class="gallery-thumb">
                                                   <img class="img-responsive" src="{{asset('assets/img/g33.jpg')}}" alt="">
                                                   <span class="overlay-mask"></span>
                                                   <a href="{{asset('assets/img/g33.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                                   <i class="fa fa-expand"></i></a>
                                                </div>
                                             </div>
                                          </div>
                                             <!-- Image 40 -->
                                             <div class="col-sm-6 col-md-6 col-lg-4 events">
                                                <div class="portfolio-item">
                                                   <div class="gallery-thumb">
                                                      <img class="img-responsive" src="{{asset('assets/img/g34.jpg')}}" alt="">
                                                      <span class="overlay-mask"></span>
                                                      <a href="{{asset('assets/img/g34.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                                      <i class="fa fa-expand"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- Image 41 -->
                                             <div class="col-sm-6 col-md-6 col-lg-4 events">
                                                <div class="portfolio-item">
                                                   <div class="gallery-thumb">
                                                      <img class="img-responsive" src="{{asset('assets/img/g35.jpg')}}" alt="">
                                                      <span class="overlay-mask"></span>
                                                      <a href="{{asset('assets/img/g35.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                                      <i class="fa fa-expand"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                             <!-- Image 42-->
                                             <div class="col-sm-6 col-md-6 col-lg-4 facilities">
                                                <div class="portfolio-item">
                                                   <div class="gallery-thumb">
                                                      <img class="img-responsive" src="{{asset('assets/img/g36.jpg')}}" alt="">
                                                      <span class="overlay-mask"></span>
                                                      <a href="{{asset('assets/img/g36.jpg')}}" data-gal="prettyPhoto[gallery]" class="link centered" title="You can add caption to pictures.">
                                                      <i class="fa fa-expand"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                          
                       
                     <!-- /lightbox-->
                  </div>
                  <!-- /col-md-12-->
               </div>
               <!-- /row -->
            </div>
            <!-- /container -->
         </section>
         <!-- Section ends -->
 

@include('layouts.web_footer') 
  <script src="{{asset('assets/js/jquery.validate.min.js') }}"></script>
  <script src="{{asset('assets/js/jquery.form.min.js') }}"></script>
  <script src="{{asset('assets/js/sweetalert2.min.js') }}"></script>
         