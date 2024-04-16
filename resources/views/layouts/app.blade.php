<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title') | Welcome</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/admin/images/favicon.png') }}">
  <link rel="stylesheet" href="{{asset('assets/admin/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{asset('assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{asset('assets/admin/css/style.css') }}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="{{asset('assets/admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="{{asset('assets/img/favicon.ico') }}" type="image/x-icon">
<style>
@media (max-width: 991px){

#navbar-brand-centered.collapse.in {
    display: block!important;
    min-height: 817px !important;
    overflow-y: scroll!important;
}
}
    @media (max-width: 767px) {
    #navbar-brand-centered.collapse.in {
    display: block!important;
    min-height: 817px !important;
    overflow-y: scroll!important;
}
.navbar-nav>li>a {
    padding: 10px !important;
    margin: 0px 0px !important;
}
}
    
</style>


<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-310856516"></script> 
<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-310856516'); </script>




<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
     fbq('init', '552646713648090'); 
    fbq('track', 'PageView');
    </script>
<noscript>
     <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=552646713648090&ev=PageView
    &noscript=1"/>
    </noscript>

</head>
<body>

<!-- Google tag (gtag.js) --> <amp-analytics type="gtag" data-credentials="include"> <script type="application/json"> { "vars": { "gtag_id": "AW-310856516", "config": { "AW-310856516": { "groups": "default" } } }, "triggers": { } } </script> </amp-analytics>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{route('dashboard')}}" class="brand-logo">
                <img class="logo-abbr" src="{{asset('assets/img/petmaven_logo.png') }}" alt="">
                <img class="logo-compact" src="{{asset('assets/img/petmaven_logo.png') }}" alt="">
                <span style="color:black; margin-left:10px;"> @if(\Auth::user()->role_id=='admin')  
                <!--{{Auth::user()->name}} -->
                
                @endif
                </span>
            </a>
            <!--<div class="nav-control">-->
            <!--    <div class="hamburger">-->
            <!--        <span class="line"></span><span class="line"></span><span class="line"></span>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
       @include('layouts.header')
       @include('layouts.sidebar')
       @yield('content')

       


    </div>
  <script type="text/javascript">
    window.onload=function(){
      $(".hiddenSms").fadeOut(5000);
    }
  </script>
 <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="{{asset('assets/js/jquery.form.min.js') }}"></script>
  <script src="{{asset('assets/js/jquery.validate.min.js') }}"></script>
  <script src="{{asset('assets/js/sweetalert2.min.js') }}"></script> 
  <script src="{{asset('assets/admin/vendor/global/global.min.js') }}"></script>
  <script src="{{asset('assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
  <script src="{{asset('assets/admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{asset('assets/admin/js/custom.min.js') }}"></script>
  <script src="{{asset('assets/admin/js/deznav-init.js') }}"></script>
  <script src="{{asset('assets/admin/vendor/owl-carousel/owl.carousel.js') }}"></script>
  
  
  
  <!-- Dashboard 1 -->

  <script src="{{asset('assets/admin/js/dashboard/dashboard-1.js') }}"></script>
  <script src="{{asset('assets/admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{asset('assets/admin/js/plugins-init/datatables.init.js') }}"></script>
 
  @stack('script')
</body>
</html>