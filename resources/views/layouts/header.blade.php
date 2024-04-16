     

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
                                    @if(\Auth::user()->role_id=='admin')
                                    
                                    <a href="{{route('dashboard')}}" class="dropdown-item ai-icon">
                                       <i class="fa fa-home"></i>
                                        <span class="ml-2">Dashboard </span>
                                    </a>
                                    <a href="{{route('userList')}}" class="dropdown-item ai-icon">
                                        <i class="fa fa-user-circle" aria-hidden="true"></i>

                                        <span class="ml-2"> All Users </span>
                                    </a>
                                     <a href="{{route('petList')}}" class="dropdown-item ai-icon">
                                        <i class="fa fa-paw" aria-hidden="true"></i>

                                        <span class="ml-2"> All Pets Reg.</span>
                                    </a>
                                     
                                    
                                     <a href="{{route('support')}}" class="dropdown-item ai-icon">
                                        <i class="fa fa-comments"></i>
                                        <span class="ml-2">Support</span>
                                    </a>
                                  
                                    <a href="{{route('logout')}}" class="dropdown-item ai-icon">
                                       <i class="fa fa-sign-out" aria-hidden="true"></i>

                                        <span class="ml-2">Logout </span>
                                    </a>
                                    @else
                                    
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
                                    @endif
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>