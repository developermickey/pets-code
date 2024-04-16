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
.mukesh{

    width: 100% !important;
    margin-left: auto !important;
    margin-right: auto !important;
    padding: 30px !important;
     }
}
.mukesh {
    width: 100% !important;
}
img.googlelogin {
    width: 250px !important;
    cursor: pointer !important;
    margin-top: 10px !important;
}
.social-container a {
    border: none !important;
}
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  margin-bottom: 10px
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
button.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}
button.accordion.active:after {
    content: "\2212";
}

     </style>
     
     @include('layouts.web_header')
   

      <link href="{{asset('assets/css/loginstyle.css') }}" rel="stylesheet">
 
         <!-- Slider -->
         <section class="containerss d-flex justify-content-center mukesh" style="margin-top: 30%; margin-bottom: 10%; width: 31%; margin-left: auto; margin-right: auto;">
             <button class="accordion">What documents are required for pet registration in Gurugram? </button>
<div class="panel">
  <p><p style="text-align: justify;"><span style="font-weight: 400;">A: To register your pet in Gurugram, you will need to provide the following documents:</span></p>
<ol>
<li style="font-weight: 400; text-align: justify;"><span style="font-weight: 400;">A photograph of your dog</span></li>
<li style="font-weight: 400; text-align: justify;"><span style="font-weight: 400;">A photograph of your dog with you, the owner</span></li>
<li style="font-weight: 400; text-align: justify;"><span style="font-weight: 400;">Your ID proof with a local address</span></li>
<li style="font-weight: 400; text-align: justify;"><span style="font-weight: 400;">A veterinary health certificate of your dog</span></li>
<li style="font-weight: 400; text-align: justify;"><span style="font-weight: 400;">A vaccination card of your dog</span></li>
<li style="font-weight: 400; text-align: justify;"><span style="font-weight: 400;">A sterilization certificate of your dog, required only if your dog is 4 years or older</span></li>
</ol></p>
</div>

<button class="accordion">Q: Cost of Registration</button>
<div class="panel">
  <p><table>
<thead>
<tr>
<th>
<p><strong>Service</strong></p>
</th>
<th>
<p><strong>Included</strong></p>
</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<p><span style="font-weight: 400;">Online form submission</span></p>
</td>
<td>
<p><span style="font-weight: 400;">✓</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">Physical submission of all the documents and filled form at the Municipality</span></p>
</td>
<td>
<p><span style="font-weight: 400;">✓</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">Government fee (Rs.500)</span></p>
</td>
<td>
<p><span style="font-weight: 400;">✓</span></p>
</td>
</tr>
<tr>
<td>
<p><span style="font-weight: 400;">Collecting the registration certificate from MCG and delivering it to your doorstep</span></p>
</td>
<td>
<p><span style="font-weight: 400;">✓</span></p>
</td>
</tr>
<tr>
<td>
<p><strong>Total Cost Rs. 1000</strong></p>
</td>
<td>
<p><span style="font-weight: 400;">---</span></p>
</td>
</tr>
</tbody>
</table>

<p style="text-align: justify;"><span style="font-weight: 400;">At Pet Maven, we make pet registration easy and hassle-free. Our total cost of Rs.1000 includes everything you need to register your pet, including online form submission, physical submission of all the documents and filled form at the Municipality, government fee (Rs.500), and collecting the registration certificate from MCG and delivering it to your doorstep. So why wait? Register your furry friend with us today and enjoy peace of mind knowing that everything is taken care of.</span></p></p>
</div>

<button class="accordion">Q. Validity of the Registration certificate issued by MCG?</button>
<div class="panel">
  <p>A: Municipality issues the Registration Certificate for the period of Financial Year (eg : 1st April 2023 – 31st March 2024)</p>
</div>
<button class="accordion">Q: Difference between a Health Certificate & a Vaccination Card.</button>
<div class="panel">
  <p><p style="text-align: justify;"><strong>A: Health certificate</strong><span style="font-weight: 400;">: medical certificate is document issued by a licensed veterinarian stating that your pet is in good health and free from any communicable diseases at the time of inspection.</span><span style="font-weight: 400;"><br /></span><span style="font-weight: 400;"><br /></span><strong>B: Vaccination Card</strong><span style="font-weight: 400;"> : You will need to provide records showing that your pet has received all necessary vaccinations, primarily rabies.</span></p></p>
</div>


<button class="accordion">Q: What is the process for pet registration in Gurugram?</button>
<div class="panel">
  <p><p style="text-align: justify;"><span style="font-weight: 400;">A: The process for registering your pet in Gurugram is simple and straightforward. Here are the steps involved:</span></p>
<p style="text-align: justify;"><strong>Step 1</strong><span style="font-weight: 400;">: Fill out the pet registration form available on our website dedicated to Pet Registration Gurugram.</span></p>
<p style="text-align: justify;"><strong>Step 2</strong><span style="font-weight: 400;">: Upload all the necessary documents, including your pet's photograph, your ID proof with a local address, a veterinary health certificate of your dog, a vaccination card of your dog, and a sterilization certificate of your dog (if applicable).</span></p>
<p style="text-align: justify;"><strong>Step 3</strong><span style="font-weight: 400;">: Proceed to make the payment. If you are unable to make the payment, our team will reach out to you within 24 hours.</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;">From there, our team takes care of the entire process, including submitting the hard copies of your application to the Municipal Corporation of Gurugram (MCG), keeping track of the application status, and collecting the issued certificate from the MCG. We then deliver the certificate right to your doorstep. The entire process typically takes around 15-20 days to complete.</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;">We understand that pet registration can be a daunting task, but with our streamlined process and dedicated team, we make it easy for you to register your beloved pet. Contact us for more information or assistance with your pet registration process.</span></p></p>
</div>

<button class="accordion">Q: What are the consequences of not registering a pet in Gurugram?</button>
<div class="panel">
  <p><p style="text-align: justify;"><span style="font-weight: 400;">A: Failing to register your pet can result in </span><strong>serious consequences</strong><span style="font-weight: 400;">. If your pet is found without the required registration certificate, the Municipal Corporation of Gurugram (MCG) can </span><strong>impose a fine of Rs. 5000 and impound your pet.</strong><span style="font-weight: 400;"> The expenses incurred during the impoundment period will also be added to the total amount of the fine until the registration certificate is obtained.</span></p>
<p style="text-align: justify;"><span style="font-weight: 400;">Therefore, it is highly recommended that pet owners in Gurugram comply with the legal requirements for pet registration to avoid any </span><strong>penalties or inconveniences</strong><span style="font-weight: 400;">. Not only is registration mandatory, but it also </span><strong>helps to ensure the safety and well-being of your pet, as well as other pets and people in the community.</strong></p></p>
</div>
             


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
 

</section>    
@include('layouts.web_footer') 
  <script src="{{asset('assets/js/jquery.validate.min.js') }}"></script>
  <script src="{{asset('assets/js/jquery.form.min.js') }}"></script>
  <script src="{{asset('assets/js/sweetalert2.min.js') }}"></script>
         