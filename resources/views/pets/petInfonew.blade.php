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
                    <!--    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>-->
                    <!--    <li class="breadcrumb-item active"><a href="javascript:void(0)">Pet Registration</a></li>-->
                    <!--</ol>-->
     <!--           </div>-->
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">

                           
                            
                            <div class="card-body">

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
                                                     <a href="{{route('editPetDetails',$value->id)}}"><span class="btn btn-sm btn-info">Update</span></a>
                                                     <a href="{{route('generatePDF')}}?id={{$value->id}}" class="btn btn-sm btn-warning">Dowload Form PDF</a>
                                                     <a href="{{route('petDelete',$value->id)}}" onclick="return confirm('Are you sure to delete?')"><span class="btn btn-sm btn-danger">Delete</span></a>
                                                  </td>
                                               </tr>
                                               @endforeach
                                            </tbody>
                                        </table>
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