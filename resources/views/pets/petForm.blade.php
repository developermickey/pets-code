<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>Pet Registration</title>
      <!-- Favicon icon -->
      <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico') }}" type="image/x-icon">
      <!-- Form step -->
      <link href="{{asset('assets/admin/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css') }}" rel="stylesheet">
      <!-- Custom Stylesheet -->
      <link href="{{asset('assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
      <link href="{{asset('assets/admin/css/style.css') }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
      <style type="text/css">
       label.text-label {
    color: #000 !important;
}
input::-webkit-input-placeholder {
        color: #000 !important;
}

input:-moz-placeholder {
       color: #000 !important;
}
input {
    color: #000 !important;
}
.custom-file-input:lang(en)~.custom-file-label::after {
    content: "Upload" !important;
}
         .button22 {
         background-color: #004A7F;
         -webkit-border-radius: 10px;
         border-radius: 10px;
         border: none;
         color: #FFFFFF;
         cursor: pointer;
         display: inline-block;
         font-family: Arial;
         font-size: 20px;
         padding: 5px 10px;
         height: 45px;
         text-align: center;
         text-decoration: none;
         -webkit-animation: glowing 1500ms infinite;
         -moz-animation: glowing 1500ms infinite;
         -o-animation: glowing 1500ms infinite;
         animation: glowing 1500ms infinite;
         }
         @-webkit-keyframes glowing {
         0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
         50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
         100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
         }
         @-moz-keyframes glowing {
         0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
         50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
         100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
         }
         @-o-keyframes glowing {
         0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
         50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
         100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
         }
         @keyframes glowing {
         0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
         50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
         100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
         }
         @media (max-width: 767px) {
         .nav-header .logo-abbr {
         max-width: 80px !important;
         }
         .checkedsss {
         width: 25px !important;
         height: 25px !important;
         margin-bottom: 15px;
         margin-right: 30px;
         cursor: pointer;
         float: right;
         margin-top: -3px !important;
         }
         }
         @media (min-width: 768px) {
         .nav-control {
         right: -0.0625rem !important;
         }
         .nav-header .logo-abbr {
         max-width: 130px !important;
         }
         }
         @media (max-width: 767px){
         .myh1 {
         font-size: 16px !important;
         margin-top: 10px !important;
         }
         .mobileimgss {
         width: 150px !important;
         height: 150px !important;
         }
         .custom-file-label:after {
         background: #656C73;
         border: 1px solid #f0f1f5;
         color: #fff;
         height: 40px;
         margin-top: -2px !important;
         border-radius: 0px 50px 50px 0px !important;
         font-size: 12px !important;
         }
         .input-group-text {
         font-size: 12px !important;
         height: 38px !important;
         margin-left: 3px !important;
         }
         .nav-header .logo-abbr {
         max-width: 80px !important;
         }
         .dropdown-menu .dropdown-item {
         padding: 0.375rem 1rem;
         font-size: 20px !important;
         }
         .header-right .header-profile .dropdown-menu {
         padding: 15px 0 !important;
         min-width: 24.5rem !important;
         }
         .header-right .header-profile .dropdown-item {
         padding: 20px 24px !important;
         }
         .nav-control {
         right: 0rem !important;
         }
         [data-sidebar-position=fixed][data-layout=vertical] .menu-toggle .deznav {
         display: none !important;
         }
         .container-fluid {
         min-height: 120vh !important;
         }
         }
         .custom-file-label {
         color: #fff !important;
         }
      </style>
   </head>
   <body>
      <!--**********************************
         Nav header start
         ***********************************-->
      <div class="nav-header">
         <a href="{{route('dashboard')}}" class="brand-logo">
            <img class="logo-abbr" src="{{asset('assets/img/petmaven_logo.png') }}" alt="">
            <img class="logo-compact" src="{{asset('assets/img/petmaven_logo.png') }}" alt="">
            <!--<span style="color:black; margin-left:10px;">{{Auth::user()->name}}</span>-->
         </a>
      </div>
      <div class="header">
         <div class="header-content">
            <nav class="navbar navbar-expand">
               <div class="collapse navbar-collapse justify-content-between">
                  <div class="header-left">
                     <div class="dashboard_bar">
                     </div>
                  </div>
                  <ul class="navbar-nav header-right">
                     <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                           <!--@if(empty(\Auth::user()->profile))-->
                           <!-- <img src="{{asset('assets/admin/images/profile/17.jpg') }}" width="20" alt=""/>-->
                           <!--@else-->
                           <!--  <img src="{{\Auth::user()->profile}}" width="20" alt=""/>-->
                           <!--@endif-->
                           <div class="nav-control">
                              <div class="hamburger">
                                 <span class="line"></span><span class="line"></span><span class="line"></span>
                              </div>
                           </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                           <a href="{{route('dashboard')}}" class="dropdown-item ai-icon">
                           <i class="fa fa-home"></i>
                           <span class="ml-2">Home </span>
                           </a>
                           <a href="{{route('profile')}}" class="dropdown-item ai-icon">
                           <i class="fa fa-user-circle" aria-hidden="true"></i>
                           <span class="ml-2">Profile </span>
                           </a>
                           <a href="{{route('yourPet')}}" class="dropdown-item ai-icon">
                           <i class="fa fa-paw" aria-hidden="true"></i>
                           <span class="ml-2">My Pet </span>
                           </a>
                           <a href="{{route('petForm')}}" class="dropdown-item ai-icon">
                           <i class="flaticon-381-heart"></i>
                           <span class="ml-2">Pet Registration (Gurugram) </span>
                           </a>
                           <a href="{{route('petInfo')}}" class="dropdown-item ai-icon">
                           <i class="fa fa-info-circle" aria-hidden="true"></i>
                           <span class="ml-2">Pet Form Info</span>
                           </a>
                           <a href="{{route('support')}}" class="dropdown-item ai-icon">
                           <i class="fa fa-comments"></i>
                           <span class="ml-2">Support</span>
                           </a>
                           <a href="{{route('logout')}}" class="dropdown-item ai-icon">
                           <i class="fa fa-sign-out" aria-hidden="true"></i>
                           <span class="ml-2">Logout </span>
                           </a>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <div class="deznav">
         <div class="deznav-scroll">
            @if(\Auth::user()->role_id=='admin')
            <ul class="metismenu" id="menu">
               <li><a href="{{route('dashboard')}}" class="ai-icon" aria-expanded="false">
                  <i class="flaticon-381-networking"></i>
                  <span class="nav-text">Dashboard</span>
                  </a>
               </li>
               <li><a href="{{route('userList')}}" class="ai-icon" aria-expanded="false">
                  <i class="flaticon-381-user-3"></i>
                  <span class="nav-text">All Users</span>
                  </a>
               </li>
               <li><a href="{{route('petList')}}" class="ai-icon" aria-expanded="false">
                  <i class="flaticon-381-settings-2"></i>
                  <span class="nav-text">All Pets Reg.</span>
                  </a>
               </li>
               <li><a href="{{route('support')}}" class="ai-icon" aria-expanded="false">
                  <i class="fa fa-comments"></i>
                  <span class="nav-text">Support</span>
                  </a>
               </li>
               <li><a href="{{route('logout')}}" class="ai-icon" aria-expanded="false">
                  <i class="fa fa-sign-out"></i>
                  <span class="nav-text">Logout</span>
                  </a>
               </li>
            </ul>
            @else
            @if(empty($petData->user_id))
            <a href="{{route('petForm')}}" class="add-menu-sidebar">Pet Register</a>
            @elseif($petData->step1=='1' AND $petData->step2=='0')
            <a href="{{route('petForm#wizard_Service')}}" class="add-menu-sidebar">Pet Register</a>
            @elseif($petData->step2=='1' AND $petData->step3=='0')
            <a href="{{route('petForm#wizard_Time')}}" class="add-menu-sidebar">Pet Register</a>
            @elseif($petData->step3=='1' AND $petData->step4=='0')
            <a href="{{route('petForm#wizard_Details')}}" class="add-menu-sidebar">Pet Register</a>
            @elseif($petData->step4=='1')
            <a href="{{route('petForm')}}" class="add-menu-sidebar button22">Complete Payment</a>
            @endif
            <ul class="metismenu" id="menu">
               <li><a href="{{route('dashboard')}}" class="ai-icon" aria-expanded="false">
                  <i class="flaticon-381-home-3"></i>
                  <span class="nav-text">Home</span>
                  </a>
               </li>
               <li><a href="{{route('profile')}}" class="ai-icon" aria-expanded="false">
                  <i class="flaticon-381-user-3"></i>
                  <span class="nav-text">Profile</span>
                  </a>
               </li>
               <li><a href="{{route('yourPet')}}" class="ai-icon" aria-expanded="false">
                  <i class="flaticon-381-heart"></i>
                  <span class="nav-text">My Pet</span>
                  </a>
               </li>
               <li><a href="{{route('petInfo')}}" class="ai-icon" aria-expanded="false">
                  <i class="flaticon-381-heart"></i>
                  <span class="nav-text">Pet Form Info</span>
                  </a>
               </li>
               <li><a href="{{route('support')}}" class="ai-icon" aria-expanded="false">
                  <i class="fa fa-comments"></i>
                  <span class="nav-text">Support</span>
                  </a>
               </li>
               <li><a href="{{route('logout')}}" class="ai-icon" aria-expanded="false">
                  <i class="fa fa-sign-out"></i>
                  <span class="nav-text">Logout</span>
                  </a>
               </li>
            </ul>
            @endif
         </div>
      </div>
      @php 
      $total_age  = @$petData->age_in_year.'.'.@$petData->age_in_month;
      @endphp
      <div class="content-body">
         <div class="container-fluid">
            <h1 class="myh1" style="text-align: center; font-size: 20px;">Hello! {{Auth::user()->name}}</h1>
            <center><p><b>NOTE:</b> This service is only for sectors under MCG</p></center>
            <br>
            <!-- <h1 class="myh1" style="text-align: center; font-size: 20px;">Please note - in case you have multiple pets then please use a different email id for every registration</h1> -->
            <br>
            <!--           <div class="page-titles">-->
            <!--<ol class="breadcrumb">-->
            <!--    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>-->
            <!--    <li class="breadcrumb-item active"><a href="javascript:void(0)">Pet Registration</a></li>-->
            <!--</ol>-->
            <!--           </div>-->
            <!-- row -->
            <div class="row">
               <div class="col-xl-12 col-xxl-12">
                  <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">Gurugram Pet Registration Form 
                        <a href="{{route('generatePDF')}}" class="btn btn-danger" style="margin-left: 150px;">Dowload Form PDF</a>
                        </h4>
                     </div>
                    <!--<img src="{{asset('assets/img/apnanaana.jpeg') }}"  width="auto" height="auto" alt="Petmaven"/>-->
                     
                     <!--<p style="padding: 20px 30px;"><b>NOTE:</b> This service is ONLY available for residents of Gurugram, who fall under the 'Municipal Corporation Of Gurugram', or 'MCG's authority. Kindly ensure that your residence/location falls within MCGs municipal borders before filling the form.</p>-->
                     <!--<div class="card-header">-->
                     <!--                         <h4 class="card-title"><a href="{{route('generatePDF')}}" class="btn btn-danger" style="margin-left: 150px;">Dowload Form PDF</a></h4>-->
                     <!--                     </div>-->
                     <div class="card-body">
                        <div class="row">
                           <div class="col-sm-12">
                              @if (session('message'))
                              <h6 class="alert alert-success hiddenSms">{{ session('message') }}</h6>
                              @endif
                              @if (session('error'))
                              <h6 class="alert alert-danger hiddenSms">{{ session('error') }}</h6>
                              @endif
                           </div>
                        </div>
                        <div id="accordion-one" class="accordion accordion-primary">
                           <form action="{{route('savePetRegistration')}}" method="post" enctype="multipart/form-data" id="finalSubmitForm">
                           @csrf 
                           <div class="accordion__item">
                              <div class="accordion__header rounded-lg" data-toggle="collapse" data-target="#default_collapseOne" aria-expanded="true" id="step1">
                                 <span class="accordion__header--text">(A). Pet Owner Info
                                 <span>  
                                 <img id="step1HeadImage" class="logo-abbr  checkedsss" src="{{asset('assets/img/warning.png') }}" alt="" style="width: 40px; height: 40px; margin-bottom: 15px;margin-right: 30px;cursor: pointer; float: right;margin-top: -8px;" > 
                                 </span>
                                 </span>
                                 </span>
                                 <span class="accordion__header--indicator"></span>
                              </div>
                              <div id="default_collapseOne" class="collapse accordion__body show" data-parent="#accordion-one">
                                 <div class="accordion__body--text">
                                    <!-- <form action="#" method="post" id="step1-form"> -->
                                       <!-- @csrf   -->
                                       <div class="row">
                                          <div class="col-lg-6 mb-2">
                                             <div class="form-group">
                                                <label class="text-label">Name Of Applicant</label>
                                                <input type="text" name="name_of_applicant" id="name_of_applicant" class="form-control step1_validation" placeholder="Enter Name Of Applicant" required value="{{@$petData->name_of_applicant}}" error-msg="Please enter name">
                                                <span class="text-danger"></span>
                                             </div>
                                          </div>
                                          <div class="col-lg-6 mb-2">
                                             <div class="form-group">
                                                <label class="text-label">Father's / Husband's Name</label>
                                                <input type="text" name="father_name" id="father_name" class="form-control step1_validation" placeholder="Enter Father's / Husband's Name" required value="{{@$petData->father_name}}" error-msg="Please enter Father's / Husband's name">
                                                <span class="text-danger"></span>
                                             </div>
                                          </div>
                                          <div class="col-lg-6 mb-2">
                                             <div class="form-group">
                                                <label class="text-label">Email Address</label>
                                                <input type="email" class="form-control step1_validation" name="email" id="email"  aria-describedby="inputGroupPrepend2" placeholder="Enter Email Address" required value="{{@$petData->email}}" error-msg="Please enter email">
                                                <span class="text-danger"></span>
                                             </div>
                                          </div>
                                          <div class="col-lg-6 mb-2">
                                             <div class="form-group">
                                                <label class="text-label">Contact No.</label>
                                                <input type="text" name="mobile" id="mobile" class="form-control step1_validation" placeholder="Enter Mobile Number" required value="{{@$petData->mobile}}" error-msg="Please enter contact number">
                                                <span class="text-danger"></span>
                                             </div>
                                          </div>
                                          <div class="col-lg-12 mb-3">
                                             <div class="form-group">
                                                <label class="text-label">Residential Address In Municipal Corporation</label><br>
                                                <small>Tip: Mention the address details as follows -- <br>(A) HOUSE NO, <br>(B) LOCALITY/COLONY/RWA, <br>(C) SECTOR WITH PINCODE</small>
                                                <input type="text" value="{{@$petData->address}}" name="address" id="address" class="form-control step1_validation" required error-msg="Please enter Residential Address">
                                                <span class="text-danger"></span>
                                             </div>
                                          </div>
                                       </div>
                                       <button type="button" class="btn btn-primary" onclick="submitStep1From()">Save</button>
                                       <b>NOTE:</b> Save Then Next
                                    <!-- </form> -->
                                 </div>
                              </div>
                           </div>
                           <div class="accordion__item" >
                              <div class="accordion__header collapsed  rounded-lg" data-toggle="collapse" data-target="#default_collapseTwo" id="step2">
                                 <span class="accordion__header--text">(B). Pet  Info
                                 <span> 
                                 <img  id="step2HeadImage" class="logo-abbr  checkedsss" src="{{asset('assets/img/warning.png') }}" alt="" style="width: 40px; height: 40px; margin-bottom: 15px;margin-right: 30px;cursor: pointer; float: right;margin-top: -8px;" > 
                                 </span>
                                 </span>
                                 </span>
                                 <span class="accordion__header--indicator"></span>
                              </div>
                              <div id="default_collapseTwo" class="collapse accordion__body" data-parent="#accordion-one">
                                 <div class="accordion__body--text">
                                    <!-- <form action="#" method="post" id="step2-form"> -->
                                       <!-- @csrf   -->
                                       <div class="row">
                                          <div class="col-lg-6 mb-2">
                                             <div class="form-group">
                                                <label class="text-label">Name Of Dog</label>
                                                <input type="text" name="dog_name" class="form-control step2_validation" placeholder="Name Of Dog" required value="{{@$petData->dog_name}}" error-msg="Please enter dog name">
                                                <span class="text-danger"></span>
                                             </div>
                                          </div>
                                          <div class="col-lg-6 mb-2">
                                             <div class="form-group col-md-6">
                                                <label>Gender</label>
                                                <select id="dog_gender" name="dog_gender" id="dog_gender" class="btn btn-primary light form-control default-select" error-msg="Please select gender">
                                                <option value="Dog (Male)" selected>Dog (Male)</option>
                                                <option value="Bitch (Female)" >Bitch (Female)</option>
                                                </select>
                                                <span class="text-danger"></span>
                                             </div>
                                          </div>
                                          <div class="col-lg-6 mb-2">
                                             <div class="form-group">
                                                <label class="text-label">Breed of Dog</label>
                                                <input type="text" name="dog_breed" id="dog_breed" class="form-control step2_validation" placeholder="Example Golden Retriever" required value="{{@$petData->dog_breed}}" error-msg="Please enter bread of dog">
                                                <span class="text-danger"></span>
                                             </div>
                                          </div>
                                          <div class="col-lg-6 mb-2">
                                             <div class="form-group">
                                                <label class="text-label">Colour of Dog</label>
                                                <input type="text" name="dog_color" id="dog_color" class="form-control step2_validation" required value="{{@$petData->dog_color}}" error-msg="Please enter colour of dog">
                                                <span class="text-danger"></span>
                                             </div>
                                          </div>
                                          <div class="col-lg-6 mb-2">
                                             <div class="form-group">
                                                <label class="text-label">D.O.B</label>
                                                <input type="date" name="dob" id="dob" class="form-control step2_validation" required value="{{@$petData->dob}}" error-msg="Please enter dob">
                                                <span class="text-danger"></span>
                                             </div>
                                          </div>
                                          <div class="col-lg-6 mb-2">
                                             <div class="form-group">
                                                <label class="text-label">Age of Dog (In Years)</label>
                                                <!--<input type="number" name="age_in_year" id="age_in_year" class="form-control" >-->
                                                <select name="age_in_year" id="age_in_year" class="btn btn-primary light form-control default-select" required error-msg="Please enter age of dog in years">
                                                   <option value="0" selected {{ @$petData->age_in_year == '0' ? 'selected' : '' }}>0</option>
                                                   <option value="1" {{ @$petData->age_in_year == '1' ? 'selected' : '' }}>1</option>
                                                   <option value="2"{{ @$petData->age_in_year == '2' ? 'selected' : '' }}>2</option>
                                                   <option value="3"{{ @$petData->age_in_year == '3' ? 'selected' : '' }}>3</option>
                                                   <option value="4"{{ @$petData->age_in_year == '4' ? 'selected' : '' }}>4</option>
                                                   <option value="5"{{ @$petData->age_in_year == '5' ? 'selected' : '' }}>5</option>
                                                   <option value="6"{{ @$petData->age_in_year == '6' ? 'selected' : '' }}>6</option>
                                                   <option value="7"{{ @$petData->age_in_year == '7' ? 'selected' : '' }}>7</option>
                                                   <option value="8"{{ @$petData->age_in_year == '8' ? 'selected' : '' }}>8</option>
                                                   <option value="9"{{ @$petData->age_in_year == '9' ? 'selected' : '' }}>9</option>
                                                   <option value="10"{{ @$petData->age_in_year == '10' ? 'selected' : '' }}>10</option>
                                                   <option value="11"{{ @$petData->age_in_year == '11' ? 'selected' : '' }}>11</option>
                                                   <option value="12"{{ @$petData->age_in_year == '12' ? 'selected' : '' }}>12</option>
                                                   <option value="13"{{ @$petData->age_in_year == '13' ? 'selected' : '' }}>13</option>
                                                   <option value="14"{{ @$petData->age_in_year == '14' ? 'selected' : '' }}>14</option>
                                                   <option value="15"{{ @$petData->age_in_year == '15' ? 'selected' : '' }}>15</option>
                                                   <option value="16"{{ @$petData->age_in_year == '16' ? 'selected' : '' }}>16</option>
                                                   <option value="17"{{ @$petData->age_in_year == '17' ? 'selected' : '' }}>17</option>
                                                   <option value="18"{{ @$petData->age_in_year == '18' ? 'selected' : '' }}>18</option>
                                                   <option value="19"{{ @$petData->age_in_year == '19' ? 'selected' : '' }}>19</option>
                                                   <option value="20"{{ @$petData->age_in_year == '20' ? 'selected' : '' }}>20</option>
                                                   <!--<option value="10"{{ @$petData->dog_gender == 'Bitch (Female)' ? 'selected' : '' }}>Bitch (Female)</option>-->
                                                </select>
                                                <span class="text-danger"></span>
                                             </div>
                                          </div>
                                          <div class="col-lg-6 mb-2">
                                             <div class="form-group">
                                                <label class="text-label">Age of Dog (In Months)</label>
                                                <!--<input type="number"  name="age_in_month" id="age_in_month" class="form-control" required value="{{@$petData->age_in_month}}">-->
                                                <select  name="age_in_month" id="age_in_month" class="btn btn-primary light form-control default-select" error-msg="Please enter age of dog in months">
                                                   <option value="1"{{ @$petData->age_in_month == '1' ? 'selected' : '' }}>1</option>
                                                   <option value="2"{{ @$petData->age_in_month == '2' ? 'selected' : '' }}>2</option>
                                                   <option value="3"{{ @$petData->age_in_month == '3' ? 'selected' : '' }}>3</option>
                                                   <option value="4"{{ @$petData->age_in_month == '4' ? 'selected' : '' }}>4</option>
                                                   <option value="5"{{ @$petData->age_in_month == '5' ? 'selected' : '' }}>5</option>
                                                   <option value="6"{{ @$petData->age_in_month == '6' ? 'selected' : '' }}>6</option>
                                                   <option value="7"{{ @$petData->age_in_month == '7' ? 'selected' : '' }}>7</option>
                                                   <option value="8"{{ @$petData->age_in_month == '8' ? 'selected' : '' }}>8</option>
                                                   <option value="9"{{ @$petData->age_in_month == '9' ? 'selected' : '' }}>9</option>
                                                   <option value="10"{{ @$petData->age_in_month == '10' ? 'selected' : '' }}>10</option>
                                                   <option value="11"{{ @$petData->age_in_month == '11' ? 'selected' : '' }}>11</option>
                                                   <option value="12"{{ @$petData->age_in_month == '12' ? 'selected' : '' }}>12</option>
                                                   <!--<option value="10"{{ @$petData->dog_gender == 'Bitch (Female)' ? 'selected' : '' }}>Bitch (Female)</option>-->
                                                </select>
                                                <span class="text-danger"></span>
                                             </div>
                                          </div>
                                       </div>
                                       <button type="button" class="btn btn-primary" onclick="submitStep2From()">Save</button>
                                       <b>NOTE:</b> Save Then Next
                                    <!-- </form> -->
                                 </div>
                              </div>
                           </div>
                           <div class="accordion__item">
                              <div class="accordion__header collapsed rounded-lg" data-toggle="collapse" data-target="#default_collapseThree" id="step3">
                                 <span class="accordion__header--text">(C). Document Upload
                                 <span>  
                                 <img class="logo-abbr  checkedsss" id="step3HeadImage" src="{{asset('assets/img/warning.png') }}" alt="" style="width: 40px; height: 40px; margin-bottom: 15px;margin-right: 30px;cursor: pointer; float: right;margin-top: -8px;" > 
                                 </span>  
                                 </span>
                                 </span>
                                 <span class="accordion__header--indicator"></span>
                              </div>
                              <div id="default_collapseThree" class="collapse accordion__body" data-parent="#accordion-one">
                                 <div class="accordion__body--text">
                                    <center>
                                       <h3 style="font-size: .875rem;">Please Refer to our FAQ’s section to have a better understanding of required documents</h3>
                                    </center>
                                    <!-- <form action="{{route('saveStep3')}}" method="post" enctype="multipart/form-data"> -->
                                       <!-- @csrf  -->
                                       <div class="row emial-setup">
                                          <div class="col-lg-6 col-sm-12 col-6 mt-5 ">
                                             <label class="text-label">Passport Size Photo of Dog</label>
                                             <div class="input-group mt-2 mb-3">
                                                <div class="input-group-prepend">
                                                   <span class="input-group-text"></span>
                                                </div>
                                                <div class="custom-file">
                                                   <input type="file" class="custom-file-input" name="1st_passport_size" id="imgInp" error-msg="Required">
                                                   <label class="custom-file-label"></label>
                                                </div>
                                                <span class="text-danger"></span>
                                             </div>
                                             @if(!empty($petData->st_passport_size))
                                             <img  style="display: none" id="blah" src="#" width="150" height="150" alt="your image" />
                                             <img src="{{@$petData->st_passport_size}}" width="150" height="150" id="blah_hide"  alt=""/>
                                             @else
                                             <img  style="display: none" id="blah" src="#" width="150" height="150" alt="your image" />
                                             @endif
                                          </div>
                                          <div class="col-lg-6 col-sm-12 col-6 mt-5 ">
                                             <label class="text-label">Photo of Dog with Owner</label>
                                             <div class="input-group mt-2 mb-3">
                                                <div class="input-group-prepend">
                                                   <span class="input-group-text"></span>
                                                </div>
                                                <div class="custom-file">
                                                   <input type="file" class="custom-file-input" id="imgInp2" name="owner_photo" error-msg="Required">
                                                   <label class="custom-file-label"></label>
                                                </div>
                                                   <span class="text-danger"></span>
                                                <br>
                                             </div>
                                             @if(!empty($petData->owner_proof_photo))
                                             <img  style="display: none" id="blah2" src="#" width="150" height="150" alt="your image" />
                                             <img src="{{@$petData->owner_photo}}" id="blah_hide2" width="150" height="150" alt=""/>
                                             @else
                                             <img  style="display: none" id="blah2" src="#" width="150" height="150" alt="your image" />
                                             @endif
                                          </div>
                                          <div class="col-lg-6 col-sm-12 col-6 mt-5 ">
                                             <label class="text-label">Owner’s ID Proof With Local Address 1 </label>
                                             <div class="input-group mt-2 mb-3">
                                                <div class="input-group-prepend">
                                                   <span class="input-group-text"></span>
                                                </div>
                                                <div class="custom-file">
                                                   <input type="file" class="custom-file-input" name="owner_proof_photo" id="imgInp3" error-msg="Required">
                                                   <label class="custom-file-label"></label>
                                                </div>
                                                   <span class="text-danger"></span>
                                                <br>
                                             </div>
                                             @if(!empty($petData->owner_proof_photo))
                                             <img  style="display: none" id="blah3" src="#" width="150" height="150" alt="your image" />
                                             <img src="{{@$petData->owner_proof_photo}}" width="150" height="150" id="blah_hide3" alt=""/>
                                             @else
                                             <img  style="display: none" id="blah3" src="#" width="150" height="150" alt="your image" />
                                             @endif
                                          </div>
                                          <!--2 address probe-->
                                          <div class="col-lg-6 col-sm-12 col-6 mt-5 ">
                                             <label class="text-label">Owner’s ID Proof With Local Address 2</label>
                                             <div class="input-group mt-2 mb-3">
                                                <div class="input-group-prepend">
                                                   <span class="input-group-text"></span>
                                                </div>
                                                <div class="custom-file">
                                                   <input type="file" class="custom-file-input" name="owner_proof_photo1" id="imgInp31" error-msg="Required">
                                                   <label class="custom-file-label"></label>
                                                </div>
                                                   <span class="text-danger"></span>
                                                <br>
                                             </div>
                                             @if(!empty($petData->owner_proof_photo1))
                                             <img  style="display: none" id="blah31" src="#" width="150" height="150" alt="your image" />
                                             <img src="{{@$petData->owner_proof_photo1}}" width="150" height="150" id="blah_hide31" alt=""/>
                                             @else
                                             <img  style="display: none" id="blah31" src="#" width="150" height="150" alt="your image" />
                                             @endif
                                          </div>
                                          <!---->
                                          <div class="col-lg-6 col-sm-12 col-6 mt-5">
                                             <label class="text-label">Sterilization Certificate of Dog (Required only if the dog's age is 4 years or above)</label>
                                             <div class="input-group mt-2 mb-3">
                                                <div class="input-group-prepend">
                                                   <span class="input-group-text"></span>
                                                </div>
                                                <div class="custom-file">
                                                   <input type="file" class="custom-file-input" name="sterilization_certificate" id="imgInp4" error-msg="Required">
                                                   <label class="custom-file-label"></label>
                                                </div>
                                                   <span class="text-danger"></span>
                                             </div>
                                             @if(!empty($petData->sterilization_certificate))
                                             <img  style="display: none" id="blah4" src="#" width="150" height="150" alt="your image" />
                                             <img src="{{@$petData->sterilization_certificate}}" id="blah_hide4" width="150" height="150" alt=""/>
                                             @else
                                             <img  style="display: none" id="blah4" src="#" width="150" height="150" alt="your image" />
                                             @endif
                                          </div>
                                          <div class="col-lg-6 col-sm-12 col-6 mt-5">
                                             <label class="text-label">Vaccination Card of Dog (Upload A Picture Of The Latest Rabies Vaccination Record)</label>
                                             <div class="input-group mt-2 mb-3">
                                                <div class="input-group-prepend">
                                                   <span class="input-group-text"></span>
                                                </div>
                                                <div class="custom-file">
                                                   <input type="file" class="custom-file-input" id="imgInp5" name="vaccination_card" error-msg="Required">
                                                   <label class="custom-file-label"></label>
                                                </div>
                                                   <span class="text-danger"></span>
                                             </div>
                                             @if(!empty($petData->vaccination_card))
                                             <img  style="display: none" id="blah5" src="#" width="150" height="150" alt="your image" />
                                             <img src="{{@$petData->vaccination_card}}" id="blah_hide5" width="150" height="150" alt=""/>
                                             @else
                                             <img  style="display: none" id="blah5" src="#" width="150" height="150" alt="your image" />
                                             @endif
                                          </div>
                                          <div class="col-lg-6 col-sm-12 col-6 mt-5">
                                             <label class="text-label">Veterinary Health Certificate of Dog</label>
                                             <div class="input-group mt-2 mb-3">
                                                <div class="input-group-prepend">
                                                   <span class="input-group-text"></span>
                                                </div>
                                                <div class="custom-file">
                                                   <input type="file" class="custom-file-input" name="veterinary_health_certificate" id="imgInp6">
                                                   <label class="custom-file-label"></label>
                                                </div>
                                             </div>
                                             @if(!empty($petData->veterinary_health_certificate))
                                             <img  style="display: none" id="blah6" src="#" width="150" height="150" alt="your image" />
                                             <img src="{{@$petData->veterinary_health_certificate}}" id="blah_hide6" width="150" height="150" alt=""/>
                                             @else
                                             <img  style="display: none" id="blah6" src="#" width="150" height="150" alt="your image" />
                                             @endif
                                          </div>
                                          <div class="col-lg-6 col-sm-12 col-6 mt-5">
                                             <label class="text-label">Upload Signature</label>
                                             <div class="input-group mt-2 mb-3">
                                                <div class="input-group-prepend">
                                                   <span class="input-group-text"></span>
                                                </div>
                                                <div class="custom-file">
                                                   <input type="file" class="custom-file-input" name="signature" id="imgInp7" error-msg="Required">
                                                   <label class="custom-file-label"></label>
                                                </div>
                                                   <span class="text-danger"></span>
                                             </div>
                                             @if(!empty($petData->signature))
                                             <img  style="display: none" id="blah7" src="#" width="150" height="150" alt="your image" />
                                             <img src="{{@$petData->signature}}" id="blah_hide7" width="150" height="150" alt=""/>
                                             @else
                                             <img  style="display: none" id="blah7" src="#" width="150" height="150" alt="your image" />
                                             @endif
                                          </div>
                                       </div>
                                 </div>
                                 <br><br>
                                 
                                 <button type="button" class="btn btn-primary" onclick="submitStep3From()">Final Submit</button>
                                 <!-- </form> -->
                              </div>
                           </div>
                           </form>
                        </div>
                        <div class="accordion__item">
                           <div class="accordion__header collapsed rounded-lg" data-toggle="collapse" data-target="#default_collapseFour">
                              <span class="accordion__header--text">(D). Cost of Registration
                              </span>
                              </span>
                              <span class="accordion__header--indicator"></span>
                           </div>
                           <div id="default_collapseFour" class="collapse accordion__body" data-parent="#accordion-one">
                              <div class="accordion__body--text">
                                 <table style="float: left;">
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
                                             <p><span style="font-weight: 400;">Government fee (Rs.500).</span></p>
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
                                             <p><span style="font-weight: 400;">Online form submission</span></p>
                                          </td>
                                          <td>
                                             <p><span style="font-weight: 400;">✓</span></p>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <p><span style="font-weight: 400;">Submitting the hardcopy of the entire form along with documents at the Municipality of Gurgaon</span></p>
                                          </td>
                                          <td>
                                             <p><span style="font-weight: 400;">✓</span></p>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>
                                             <p><strong>Total Cost (Rs. 1000)</strong></p>
                                          </td>
                                          <td>
                                             <p><span style="font-weight: 400;">---</span></p>
                                          </td>
                                       </tr>
                                    </tbody>
                                    <br><br>
                                    <p>At Pet Maven, we make pet registration easy and hassle-free. Our total cost of Rs.1000 includes everything you need to register your pet, including the government fee and notarization of the form, online form submission, document submission, and delivery of the registration certificate to your doorstep. So why wait? Register your furry friend with us today and enjoy peace of mind knowing that everything is taken care of.</p>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>






               <center style="margin: auto;">
                  <a href="{{route('dashboard')}}">
                     <h2 class="myh1 btn btn-primary"style="text-align: center; font-size: 18px; margin-bottom: 30px !important;">Back To Dashboard</h2>
                  </a>
               </center>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h3>Pet List</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Payment Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($petsData as $key => $value)
                           <tr>
                              <td>{{ ++$key }}</td>
                              <td>{{ $value->dog_name }}</td>
                              <td>

                                 <span class="btn btn-sm btn-<?php echo ($value->payment_status=='Completed')?'success':'danger' ?>">
                                    @if($value->payment_status=='Pending')
                                    <a style="color: white;" href="{{route('proceed_Payment',$value->id)}}">Pay Now</a>
                                    @else
                                    {{ ucfirst($value->payment_status) }}
                                    @endif
                                 </span>

                              </td>
                              <td>{{ date("h:i:s d-m-Y",strtotime($value->create_date)) }}</td> 
                              <td> 
                                 <a href="{{route('editPetDetails',$value->id)}}"><span style="margin: 5px;" class="btn btn-sm btn-info">Update</span></a>
                                 <a href="{{route('generatePDF')}}?id={{$value->id}}" class="btn btn-sm btn-warning">Dowload Form PDF</a>
                                 <a href="{{route('petDelete',$value->id)}}" onclick="return confirm('Are you sure to delete?')"><span style="margin: 5px;" class="btn btn-sm btn-danger">Delete</span></a>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
         </div>
      </div>
      </div>
      </div>
      <!--**********************************
         Content body end
         ***********************************-->
      <!--**********************************
         Footer start
         ***********************************-->
      <div class="footer">
         <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="https://murphtech.in" target="_blank">MurphTech.in</a> 2024</p>
         </div>
      </div>
      <!--**********************************
         Footer end
         ***********************************-->
      <!--**********************************
         Support ticket button start
         ***********************************-->
      <!--**********************************
         Support ticket button end
         ***********************************-->
      </div>
      <!--**********************************
         Main wrapper end
         ***********************************-->
      <!--**********************************
         Scripts
         ***********************************-->
      <!-- Required vendors -->
      <script src="{{asset('assets/admin/vendor/global/global.min.js') }}"></script>
      <script src="{{asset('assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
      <script src="{{asset('assets/admin/js/custom.min.js') }}"></script>
      <script src="{{asset('assets/admin/js/deznav-init.js') }}"></script>
      <script type="text/javascript">
         window.onload=function(){
           $(".hiddenSms").fadeOut(5000);
         }
      </script>
      <script src="{{asset('assets/admin/vendor/jquery-steps/build/jquery.steps.min.js') }}"></script>
      <script src="{{asset('assets/admin/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
      <!-- Form validate init -->
      <script src="{{asset('assets/admin/js/plugins-init/jquery.validate-init.js') }}"></script>
      <!-- Form Steps -->
      <script src="{{asset('assets/admin/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js') }}"></script>
      <script>
         imgInp.onchange = evt => {
             $('#blah').show();
             $('#blah_hide').hide();
             const [file] = imgInp.files
             if (file) {
               blah.src = URL.createObjectURL(file)
             }
         }
         
         
         imgInp2.onchange = evt => {
             $('#blah2').show();
             $('#blah_hide2').hide();
             const [file] = imgInp2.files
             if (file) {
               blah2.src = URL.createObjectURL(file)
             }
         }
         
         
         imgInp3.onchange = evt => {
             $('#blah3').show();
             $('#blah_hide3').hide();
             const [file] = imgInp3.files
             if (file) {
               blah3.src = URL.createObjectURL(file)
             }
         }
         
          imgInp31.onchange = evt => {
             $('#blah31').show();
             $('#blah_hide31').hide();
             const [file] = imgInp31.files
             if (file) {
               blah31.src = URL.createObjectURL(file)
             }
         }
         
         
         imgInp4.onchange = evt => {
             $('#blah4').show();
             $('#blah_hide4').hide();
             const [file] = imgInp4.files
             if (file) {
               blah4.src = URL.createObjectURL(file)
             }
         }
         
         
         imgInp5.onchange = evt => {
             $('#blah5').show();
             $('#blah_hide5').hide();
             const [file] = imgInp5.files
             if (file) {
               blah5.src = URL.createObjectURL(file)
             }
         }
         
         imgInp6.onchange = evt => {
             $('#blah6').show();
             $('#blah_hide6').hide();
             const [file] = imgInp6.files
             if (file) {
               blah6.src = URL.createObjectURL(file)
             }
         }
         
         imgInp7.onchange = evt => {
             $('#blah7').show();
             $('#blah_hide7').hide();
             const [file] = imgInp7.files
             if (file) {
               blah7.src = URL.createObjectURL(file)
             }
         }
         
         
         
         
         $(document).ready(function(){
            // SmartWizard initialize
            $('#smartwizard').smartWizard(); 
         });
      </script>

      <script type="text/javascript">
         function submitStep1From()
         {
            if(checkValidation('step1_validation'))
            {   
               $("#step1HeadImage").attr("src","{{asset('assets/img/check.png') }}");
               $("#step2").click();
            }
         }

         function submitStep2From()
         {
            if(checkValidation('step1_validation'))
            {
               if(checkValidation('step2_validation'))
               {
                  $("#step2HeadImage").attr("src","{{asset('assets/img/check.png') }}");
                  $("#step3").click();
               }else{
                  $("#step2HeadImage").attr("src","{{asset('assets/img/warning.png') }}");
                  $("#step2").click();
               }
            }else{
               $("#step1HeadImage").attr("src","{{asset('assets/img/warning.png') }}");
               $("#step1").click();
            }
         }

         function submitStep3From()
         {
            if(checkValidation('step1_validation'))
            {
               if(checkValidation('step2_validation'))
               {
                  if(checkValidation('step3_validation'))
                  {
                     $("#step3HeadImage").attr("src","{{asset('assets/img/check.png') }}");
                     $("#finalSubmitForm").submit();
                  }else{
                     $("#step3HeadImage").attr("src","{{asset('assets/img/warning.png') }}");
                     $("#step3").click();
                  }
               }else{
                  $("#step2HeadImage").attr("src","{{asset('assets/img/warning.png') }}");
                  $("#step2").click();
               }
            }else{
               $("#step1HeadImage").attr("src","{{asset('assets/img/warning.png') }}");
               $("#step1").click();
            }
         }

         function checkValidation(input)
         {   
             var check=true;
             $('.'+input).each(function(key, element ){
               // alert($(element).val());
                 if($(element).val()=='' || $(element).val()==null) { 
                     if($(element).attr('error-msg')=='Required')
                     {
                         $(element).parent().next('span').html($(element).attr('error-msg'));
                     }else{
                         $(element).next('span').html($(element).attr('error-msg'));  
                     }              
                     $(element).addClass('is-invalid');  
                     check=false;
                 }else{
                     if($(element).attr('error-msg')=='Required')
                     {
                         $(element).parent().next('span').html('');
                     }else{
                        $(element).next('span').html('');
                     } 
                       
                     
                     $(element).addClass('is-valid'); 
                 }
             });
             return check;
         }

         $('.step1_validation').on('change',function(){
             if($(this).val().trim()=='')
             {
                  if($(this).attr('error-msg')=='Required')
                  {
                      $(this).parent().next('span').html($(this).attr('error-msg'));
                  }else{
                      $(this).next('span').html($(this).attr('error-msg'));
                  }
                 $(this).removeClass('is-valid'); 
                 $(this).addClass('is-invalid');
             }else{

                  if($(this).attr('error-msg')=='Required')
                  {
                      $(this).parent().next('span').html('');
                  }else{
                      $(this).next('span').html('');
                  }
                 $(this).removeClass('is-invalid');
                 $(this).addClass('is-valid');
             }
         });

         $('.step2_validation').on('change',function(){
             if($(this).val().trim()=='')
             {
                  if($(this).attr('error-msg')=='Required')
                  {
                      $(this).parent().next('span').html($(this).attr('error-msg'));
                  }else{
                      $(this).next('span').html($(this).attr('error-msg'));
                  }
                 $(this).removeClass('is-valid'); 
                 $(this).addClass('is-invalid');
             }else{

                  if($(this).attr('error-msg')=='Required')
                  {
                      $(this).parent().next('span').html('');
                  }else{
                      $(this).next('span').html('');
                  }
                 $(this).removeClass('is-invalid');
                 $(this).addClass('is-valid');
             }
         });

         $('.step3_validation').on('change',function(){
             if($(this).val().trim()=='')
             {
                  if($(this).attr('error-msg')=='Required')
                  {
                      $(this).parent().next('span').html($(this).attr('error-msg'));
                  }else{
                      $(this).next('span').html($(this).attr('error-msg'));
                  }
                 $(this).removeClass('is-valid'); 
                 $(this).addClass('is-invalid');
             }else{

                  if($(this).attr('error-msg')=='Required')
                  {
                      $(this).parent().next('span').html('');
                  }else{
                      $(this).next('span').html('');
                  }
                 $(this).removeClass('is-invalid');
                 $(this).addClass('is-valid');
             }
         });

         // $("form#finalSubmitForm").submit(function(e) {
         //     e.preventDefault();   
         //     var formData = new FormData(this);
         //     if(checkValidation('step3_validation'))
         //     {   
         //         $.ajax({
         //             url: $(this).attr('action'),
         //             type: 'POST',
         //             data: formData,
         //             dataType: "JSON",
         //             cache: false,
         //             contentType: false,
         //             processData: false,
         //             success: function (data) {
         //                 console.log(data);
         //                 $('#shipper_id').html(data.html);
         //                 getShipperInfo(data.id);
         //                 $('#shipperFormsModal').modal('hide');
         //             },
         //         });
         //     }
         // });

         // $("form#step1-form").submit(function(e) {
         //    e.preventDefault();  
         //     $("#step1HeadImage").attr("src","{{asset('assets/img/check.png') }}");
         //    $("#step2").click();
         // });

         // $("form#step2-form").submit(function(e) {
         //    e.preventDefault();  
         //    $("#step2HeadImage").attr("src","{{asset('assets/img/check.png') }}");
         //    $("#step3").click();
         // });


      </script>
   </body>
</html>