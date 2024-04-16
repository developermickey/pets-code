@extends('layouts.app')

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

@section('content')

 <div class="content-body">
            <!-- row -->
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-12">
             <div class="card">
              <div class="card-body">
                <form action="{{route('update-profile-data')}}" class="user-form" enctype="multipart/form-data" method="post">
                   @csrf
                  <input class="form-control mb-3" type="text" placeholder="Name" aria-label="default input example" value="{{ $profileData->name }}" name="name">
                  <input class="form-control mb-3" type="email" placeholder="Email" aria-label="default input example" value="{{ $profileData->email }}" name="email">
                  <input class="form-control mb-3" type="number" placeholder="Mobile" aria-label="default input example" value="{{ $profileData->mobile }}" name="mobile">
                  <input class="form-control mb-3" type="password" placeholder="Password" aria-label="default input example" name="password"> 
                  <input class="form-control mb-3" type="hidden" name="user_id" value="{{ $profileData->id }}">
                  <input class="form-control" name="file" type="file" id="formFile">
                  <button class="btn btn-primary mt-5" type="submit">Update Profile</button>
                </form>
              </div> 
            </div> 
             <center><a href="{{route('dashboard')}}"><h2 class="myh1 btn btn-primary"style="text-align: center; font-size: 20px; margin-bottom: 30px !important;">Back To Dashboard</h2></a></center>
             
          </div>
        </div>
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


