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
        
  <p data-toggle="collapse" data-target="#demo"><b>Q: Cost of Registration</b></p>
   <div id="demo" class="collapse">
         <table class="table">
        <thead>
          <tr>
            <th scope="col">Service</th>
            <th scope="col">Included</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Online form submission</td>
            <td><i class="fa fa-check" style="font-size:24px"></i></td>
          </tr>
          <tr>
            <td>Physical submission of all the documents and filled form at the Municipality</td>
            <td><i class="fa fa-check" style="font-size:24px"></i></td>
          </tr>
          <tr>
            <td>Government fee (Rs.500)</td>
            <td><i class="fa fa-check" style="font-size:24px"></i></td>
          </tr>
          <tr>
            <td>Collecting the registration certificate from MCG and delivering it to your doorstep</td>
            <td><i class="fa fa-check" style="font-size:24px"></i></td>
          </tr>
          <tr>
            <td><b>Total Cost Rs. 1000</b></td>
            <td>---</td>
          </tr>
        </tbody>
      </table>
      <p>At Pet Maven, we make pet registration easy and hassle-free. Our total cost of Rs.1000 includes everything you need to register your pet, including online form submission, physical submission of all the documents and filled form at the Municipality, government fee (Rs.500), and collecting the registration certificate from MCG and delivering it to your doorstep. So why wait? Register your furry friend with us today and enjoy peace of mind knowing that everything is taken care of</p>
  </div>

  <p data-toggle="collapse" data-target="#demo2"><b>Q. Validity of the Registration certificate issued by MCG?</b></p>
   <div id="demo2" class="collapse">
      <p><b>A:</b>Municipality issues the Registration Certificate for the period of Financial Year (eg : 1st April 2023 – 31st March 2024)</p>    
  </div>

  <p data-toggle="collapse" data-target="#demo3"><b>Q: Difference between a Health Certificate & a Vaccination Card.</b></p>
   <div id="demo3" class="collapse">
      <p>A:<br>
<b>Health certificate:</b> medical certificate is document issued by a licensed veterinarian stating that your pet is in good health and free from any communicable diseases at the time of inspection.
</p>   
<p>
<b>Vaccination Card :</b> You will need to provide records showing that your pet has received all necessary vaccinations, primarily rabies.
</p> 
  </div>

  <p data-toggle="collapse" data-target="#demo4"><b>Q: What is the process for pet registration in Gurugram?</b></p>
   <div id="demo4" class="collapse">
      <p>A: The process for registering your pet in Gurugram is simple and straightforward. Here are the steps involved:</p>
     
      <p><b>Step 1: </b>Fill out the pet registration form available on our website dedicated to Pet Registration Gurugram.</p>

    
      <p><b>Step 2: </b>Upload all the necessary documents, including your pet's photograph, your ID proof with a local address, a veterinary health certificate of your dog, a vaccination card of your dog, and a sterilization certificate of your dog (if applicable).</p> 

   
      <p><b>Step 3: </b>Proceed to make the payment. If you are unable to make the payment, our team will reach out to you within 24 hours.</p> 

      <p>From there, our team takes care of the entire process, including submitting the hard copies of your application to the Municipal Corporation of Gurugram (MCG), keeping track of the application status, and collecting the issued certificate from the MCG. We then deliver the certificate right to your doorstep. The entire process typically takes around 15-20 days to complete.</p> 

   
      <p>We understand that pet registration can be a daunting task, but with our streamlined process and dedicated team, we make it easy for you to register your beloved pet. Contact us for more information or assistance with your pet registration process.</p> 
  </div>

  <p data-toggle="collapse" data-target="#demo5"><b>Q: What are the consequences of not registering a pet in Gurugram?</b></p>
   <div id="demo5" class="collapse">
      <p>A: Failing to register your pet can result in <b>serious consequences.</b> If your pet is found without the required registration certificate, the Municipal Corporation of Gurugram (MCG) can <b>impose a fine of Rs. 5000 and impound your pet.</b> The expenses incurred during the impoundment period will also be added to the total amount of the fine until the registration certificate is obtained.</p>   


       <p>Therefore, it is highly recommended that pet owners in Gurugram comply with the legal requirements for pet registration to avoid any <b>penalties or inconveniences.</b> Not only is registration mandatory, but it <b>also helps to ensure the safety and well-being of your pet, as well as other pets and people in the community.</b></p>

  </div>
 

</section>    
@include('layouts.web_footer') 
  <script src="{{asset('assets/js/jquery.validate.min.js') }}"></script>
  <script src="{{asset('assets/js/jquery.form.min.js') }}"></script>
  <script src="{{asset('assets/js/sweetalert2.min.js') }}"></script>
         