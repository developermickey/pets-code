@extends('layouts.app')
<link rel="shortcut icon" href="{{asset('assets/img/favicon.ico') }}" type="image/x-icon">

@section('title', 'Dashboard')

<style>
@media (min-width: 768px) {
    .dropdown-menu-right {
        display: none !important;
    }
    .nav-control {
        right: -0.0625rem !important;
    }
    .nav-header .logo-abbr {
    max-width: 130px !important;
}
.menu-toggle .nav-header .logo-abbr {
    max-width: 80px !important;
    margin-left: 20px !important;
}
}
    @media (max-width: 767px){
        .myh1 {
            font-size: 16px !important;
            margin-top: 10px !important;
        }
        .mobileimgss {
                width: 80px !important;
                height: 80px !important;
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

@section('content')




 <div class="content-body">
            <!-- row -->
      <div class="container-fluid">
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

     @if(\Auth::user()->role_id=='admin')     
        <div class="row">
          <div class="col-xl-9 col-xxl-8">
            <div class="row">
              <div class="col-xl-4 col-xxl-6 col-lg-4 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-end">
                      <div>
                        <p class="fs-14 mb-1">Total Users</p>
                        <span class="fs-35 text-black font-w600">{{count($user)}}
                          <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                          </svg>
                        </span>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-xxl-6 col-lg-4 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-end">
                      <div>
                        <p class="fs-14 mb-1">Total Pet Registration</p>
                        <span class="fs-35 text-black font-w600">{{count($pet)}}
                          <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                          </svg>
                        </span>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @else
        @php 
         $petData = \DB::table('pet_registration')->where('user_id',\Auth::user()->id)->first();
       @endphp
          <div class="row">
          <div class="col-xl-12 col-xxl-12">
             <h1 class="myh1"style="text-align: center; font-size: 2vw;">Hello! {{Auth::user()->name}}</h1>
             <br><br>
            <div class="row">
                
                
                <div class="col-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-end justify-content-center">
                       <a href="{{route('profile')}}">
                       <img class="logo-abbr mobileimgss" src="{{asset('assets/img/a-Your-Profile.png') }}" alt="" style="width: 200px; height: 200px; margin-left: auto;margin-right: auto;cursor: pointer;" >
                     </a>
                    </div>
                    <p class="myh1"style="text-align: center; font-size: 20px;">My Profile</p>
                  </div>
                </div>
              </div>

              <div class="col-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-center">
                     <a href="{{route('petForm')}}">
                         <img class="logo-abbr mobileimgss" src="{{asset('assets/img/c-Pet-Registration-Gurugram.png') }}" alt="" style="width: 200px; height: 200px; margin-left: auto;margin-right: auto;cursor: pointer;" >
                       </a>
                    </div>
                     <p class="myh1"style="text-align: center; font-size: 20px;">Pet Registration (Gurugram)</p>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-center justify-content-center">
                      <a href="{{route('yourPet')}}">
                       <img class="logo-abbr mobileimgss" src="{{asset('assets/img/b-Pet-Info.png') }}" alt="" style="width: 200px; height: 200px; margin-left: auto;margin-right: auto;cursor: pointer;" >
                     </a>
                    </div>
                    <p class="myh1"style="text-align: center; font-size: 20px;">Pet Info</p>
                  </div>
                </div>
              </div>

              <div class="col-6">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-end justify-content-center">
                      <a href="{{route('support')}}">
                       <img class="logo-abbr mobileimgss" src="{{asset('assets/img/d-Support.png') }}" alt="" style="width: 200px; height: 200px; margin-left: auto;margin-right: auto;cursor: pointer;" >
                     </a>
                    </div>
                    <p class="myh1"style="text-align: center; font-size: 20px;">Contact Us</p>
                  </div>
                </div>
              </div>



            </div>
            <br><br><br>
            
            <!--<center><a href="{{route('dashboard')}}"><h2 class="myh1 btn btn-primary"style="text-align: center; font-size: 2vw;">Back To Home</h2></a></center>-->
            <center><a href="https://petmaven.in/"><h2 class="myh1 btn btn-primary"style="text-align: center; font-size: 20px;">Back To Home</h2></a></center>
            
          </div>
        </div>

        @endif
            </div>
        </div>
        <script type="text/javascript">

var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();

(function(){

var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];

s1.async=true;

s1.src='https://embed.tawk.to/5f745e12f0e7167d0014f9f7/default';

s1.charset='UTF-8';

s1.setAttribute('crossorigin','*');

s0.parentNode.insertBefore(s1,s0);

})();

</script>
@stack('scripts')
<!--End of Tawk.to Script-->


@endsection