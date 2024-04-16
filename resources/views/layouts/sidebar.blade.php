     
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

 </style>


     <div class="deznav">
            <div class="deznav-scroll">
          @php  
           $petData = \DB::table('pet_registration')->where('user_id', \Auth::user()->id)->first();
          @endphp
        
           
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
        <a href="{{route('petForm')}}" class="add-menu-sidebar">Pet Registration (Gurugram)</a>
       @elseif($petData->step1=='1' AND $petData->step2=='0')
        <a href="{{route('petForm#wizard_Service')}}" class="add-menu-sidebar">Pet Registration (Gurugram)</a>
       @elseif($petData->step2=='1' AND $petData->step3=='0')
        <a href="{{route('petForm#wizard_Time')}}" class="add-menu-sidebar">Pet Registration (Gurugram)</a>
       @elseif($petData->step3=='1' AND $petData->step4=='0')
        <a href="{{route('petForm#wizard_Details')}}" class="add-menu-sidebar">Pet Registration (Gurugram)</a>
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