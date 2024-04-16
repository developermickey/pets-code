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
             <i class="fa fa-paw" aria-hidden="true"></i>
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
             <br>
				
     <!--           <div class="page-titles">-->
					<!--<ol class="breadcrumb">-->
					<!--	<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>-->
					<!--	<li class="breadcrumb-item active"><a href="javascript:void(0)">Pet Registration</a></li>-->
					<!--</ol>-->
     <!--           </div>-->
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Gurugram Pet Registration Form Preview <a href="{{route('generatePDF')}}" class="btn btn-danger" style="margin-left: 150px;">Dowload Form PDF</a></h4>
                            </div>
							
                            <div class="card-body">
					       <div id="accordion-one" class="accordion accordion-primary">
								
                   <div class="accordion__item">
                    <div class="accordion__header rounded-lg" data-toggle="collapse" data-target="#default_collapseOne">
                        <span class="accordion__header--text">(A). Pet Owner Info
                            <span>
                          @if(@$petData->step1=='1')
                             <img class="logo-abbr  checkedsss" src="{{asset('assets/img/check.png') }}" alt="" style="width: 40px; height: 40px; margin-bottom: 15px;margin-right: 30px;cursor: pointer; float: right;margin-top: -8px;" >
                          @else  
                             <img class="logo-abbr  checkedsss" src="{{asset('assets/img/warning.png') }}" alt="" style="width: 40px; height: 40px; margin-bottom: 15px;margin-right: 30px;cursor: pointer; float: right;margin-top: -8px;" >
                          @endif
                         </span>
                        </span>
                        <span class="accordion__header--indicator"></span>
                    </div>

                    <div id="default_collapseOne" class="collapse accordion__body" data-parent="#accordion-one">
                      <div class="accordion__body--text">
											
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Name Of Applicant</label>
														<input type="text" name="name_of_applicant" id="name_of_applicant" class="form-control" placeholder="Enter Name Of Applicant" required value="{{@$petData->name_of_applicant}}">
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Father's / Husband's Name</label>
														<input type="text" name="father_name" id="father_name" class="form-control" placeholder="Enter Father's / Husband's Name" required value="{{@$petData->father_name}}">
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Email Address</label>
														<input type="email" class="form-control" name="email" id="email"  aria-describedby="inputGroupPrepend2" placeholder="Enter Email Address" required value="{{@$petData->email}}">
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Contact No.</label>
														<input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Mobile Number" required value="{{@$petData->mobile}}">
													</div>
												</div>
												<div class="col-lg-12 mb-3">
													<div class="form-group">
														<label class="text-label">Residential Address In Municipal Corporation</label><br>
														<small>Tip: Mention the address details as follows -- <br>(A) HOUSE NO, <br>(B) LOCALITY/COLONY/RWA, <br>(C) SECTOR</small>
														<input type="text" value="{{@$petData->address}}" name="address" id="address" class="form-control" required>
													</div>
												</div>
											</div>
											
									  </div>
                  </div>
                  </div>



                  <div class="accordion__item">
                                        
                    <div class="accordion__header rounded-lg" data-toggle="collapse" data-target="#default_collapseTwo">
                        <span class="accordion__header--text">(B). Pet  Info
                        
                             <span>
                          @if(@$petData->step2=='1')
                             <img class="logo-abbr  checkedsss" src="{{asset('assets/img/check.png') }}" alt="" style="width: 40px; height: 40px; margin-bottom: 15px;margin-right: 30px;cursor: pointer; float: right;margin-top: -8px;" >
                          @else  
                             <img class="logo-abbr  checkedsss" src="{{asset('assets/img/warning.png') }}" alt="" style="width: 40px; height: 40px; margin-bottom: 15px;margin-right: 30px;cursor: pointer; float: right;margin-top: -8px;" >
                          @endif
                        </span>
                        </span>
                        <span class="accordion__header--indicator"></span>
                    </div>

                    <div id="default_collapseTwo" class="collapse accordion__body" data-parent="#accordion-one">
                        <div class="accordion__body--text">
									
											
											<div class="row">
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Name Of Dog</label>
														<input type="text" name="dog_name" class="form-control" placeholder="Name Of Dog" required value="{{@$petData->dog_name}}">
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group col-md-6">
														<label>Gender</label>
														<select id="dog_gender" name="dog_gender" id="dog_gender" class="btn btn-primary light form-control default-select">
															<option value="Dog (Male)"{{ @$petData->dog_gender == 'Dog (Male)' ? 'selected' : '' }}>Dog (Male)</option>
															<option value="Bitch (Female)"{{ @$petData->dog_gender == 'Bitch (Female)' ? 'selected' : '' }}>Bitch (Female)</option>
														</select>
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Breed of Dog</label>
														<input type="text" name="dog_breed" id="dog_breed" class="form-control" placeholder="Example Golden Retriever" required value="{{@$petData->dog_breed}}">
													</div>
												</div>
												<div class="col-lg-6 mb-2">
													<div class="form-group">
														<label class="text-label">Colour of Dog</label>
														<input type="text" name="dog_color" id="dog_color" class="form-control" required value="{{@$petData->dog_color}}">
													</div>
												</div>
												 <div class="col-lg-6 mb-2">
                          <div class="form-group">
                            <label class="text-label">D.O.B</label>
                            <input type="date" name="dob" id="dob" class="form-control" required value="{{@$petData->dob}}">
                          </div>
                       </div>
												<div class="col-lg-6 mb-2">
                                                  <div class="form-group">
                                                    <label class="text-label">Age of Dog (In Years)</label>
                                                    <!--<input type="number" name="age_in_year" id="age_in_year" class="form-control" >-->
                                                    <select name="age_in_year" id="age_in_year" class="btn btn-primary light form-control default-select" required>
                                                      <option value="1"{{ @$petData->age_in_year == '1' ? 'selected' : '' }}>1</option>
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
                                                  </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                  <div class="form-group">
                                                    <label class="text-label">Age of Dog (In Months)</label>
                                                    <!--<input type="number"  name="age_in_month" id="age_in_month" class="form-control" required value="{{@$petData->age_in_month}}">-->
                                                    <select  name="age_in_month" id="age_in_month" class="btn btn-primary light form-control default-select">
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
                                                  </div>
                                                </div>
											</div>
										    
										</div>		
                    </div>    
                    </div>    
											
									

                 <div class="accordion__item">
                    <div class="accordion__header collapsed rounded-lg" data-toggle="collapse" data-target="#default_collapseThree">
                        <span class="accordion__header--text">(C). Document Upload
                        
                            <span>
                            @if(@$petData->step3=='1')
                               <img class="logo-abbr  checkedsss" src="{{asset('assets/img/check.png') }}" alt="" style="width: 40px; height: 40px; margin-bottom: 15px;margin-right: 30px;cursor: pointer; float: right;margin-top: -8px;" >
                            @else  
                               <img class="logo-abbr  checkedsss" src="{{asset('assets/img/warning.png') }}" alt="" style="width: 40px; height: 40px; margin-bottom: 15px;margin-right: 30px;cursor: pointer; float: right;margin-top: -8px;" >
                            @endif
                          </span>
                        
                        </span>
                        <span class="accordion__header--indicator"></span>
                    </div>
                    <div id="default_collapseThree" class="collapse accordion__body" data-parent="#accordion-one">
                        <div class="accordion__body--text">



											<!-- <div class="card-header">
												<h4 class="card-title">Has the dog been immunized till date? <br>(Vaccination Card -Mandatory)</h4>
											</div>
											<div class="form-group mt-3 mb-0 pl-5">
												<label class="radio-inline mr-3"><input type="radio" value="1" name="immunized" id="immunized" {{ @$petData->immunized == '1' ? 'checked' : '' }}> Yes</label>
												<label class="radio-inline mr-3"><input type="radio" value="2" name="immunized" id="immunized" {{ @$petData->immunized == '2' ? 'checked' : '' }}> No</label>
											</div>
											
											<div class="card-header">
												<h4 class="card-title">If dog is 4 years old or above, <br>Attach Sterilization Certificate(Mandatory,)</h4>
											</div>
											<div class="form-group mt-3 mb-0 pl-5">
												<label class="radio-inline mr-3"><input type="radio" value="1" name="certificate" id="certificate" {{ @$petData->certificate == '1' ? 'checked' : '' }}> Yes</label>
												<label class="radio-inline mr-3"><input type="radio" value="2" name="certificate" id="certificate" {{ @$petData->certificate == '2' ? 'checked' : '' }}> No</label>
											</div> -->
											<div class="row emial-setup">
											<div class="col-lg-6 col-sm-12 col-6 mt-5 ">
												<label class="text-label">Passport Size Photo of Dog</label>
												<br>
												@if(!empty($petData->owner_proof_photo))
												<img src="{{@$petData->st_passport_size}}" width="250" height="220" alt=""/>
												@endif
											</div>
											
											<div class="col-lg-6 col-sm-12 col-6 mt-5 ">
												<label class="text-label">Photo of Dog with Owner</label>
												<br>
												@if(!empty($petData->owner_proof_photo))
												<img src="{{@$petData->owner_photo}}" width="250" height="220" alt=""/>
												@endif
											</div>
											<div class="col-lg-6 col-sm-12 col-6 mt-5 ">
												<label class="text-label">Owner’s ID Proof with local address</label>
												<br>
												@if(!empty($petData->owner_proof_photo))
												<img src="{{@$petData->owner_proof_photo}}" width="250" height="220" alt=""/>
												@endif
											</div>

                      <div class="col-lg-6 col-sm-12 col-6 mt-5">
                          <label class="text-label">Sterilization Certificate of Dog</label>
                          <br>
                            @if(!empty($petData->sterilization_certificate))
                           <img src="{{@$petData->sterilization_certificate}}" width="250" height="220" alt=""/>
                          @endif
                        </div>
			
											<!-- <div class="row emial-setup"> -->
                      
												
                      
												<div class="col-lg-6 col-sm-12 col-6 mt-5">
													<label class="text-label">Vaccination Card of Dog</label>
													<br>
													@if(!empty($petData->vaccination_card))
													 <img src="{{@$petData->vaccination_card}}" width="250" height="220" alt=""/>
													@endif
												</div>
												<div class="col-lg-6 col-sm-12 col-6 mt-5">
													<label class="text-label">Veterinary Health Certificate of Dog</label>
                                                     <br>
													@if(!empty($petData->veterinary_health_certificate))
													 <img src="{{@$petData->veterinary_health_certificate}}" width="250" height="220" alt=""/>
													@endif
												</div>
												<div class="col-lg-6 col-sm-12 col-6 mt-5">
                          <label class="text-label">Signature</label>
                                                     <br>
                          @if(!empty($petData->veterinary_health_certificate))
                           <img src="{{@$petData->signature}}" width="250" height="220" alt=""/>
                          @endif
                        </div>
												
											<!-- </div> -->
                      </div>
                      </div>
                      </div>
 

											
                </div>




									</div>
								
                            </div>
                           
                        </div>
                         <center><a href="{{route('dashboard')}}"><h2 class="myh1 btn btn-primary"style="text-align: center; font-size: 18px; margin-bottom: 30px !important;">Back To Dashboard</h2></a></center>
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
                <p>Copyright © Designed &amp; Developed by <a href="https://murphtech.in" target="_blank">MurphTech.in</a> 2023</p>
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
		$(document).ready(function(){
			// SmartWizard initialize
			$('#smartwizard').smartWizard(); 
		});
	</script>

</body>

</html>