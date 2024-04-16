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
.content-body .container-fluid, .content-body .container-sm, .content-body .container-md, .content-body .container-lg, .content-body .container-xl {
    padding-top: 15px;
    padding-right: 15px;
    padding-left: 15px;
    min-height: 132vh !important;
}
    }

    </style>

@section('content')

 <div class="content-body">
            <!-- row -->
      <div class="container-fluid">
          <h1 class="myh1" style="text-align: center; font-size: 20px;">Please note - in case you have multiple pets then please use a different email id for every registration</h1>
          
        
        <div class="row">
          <div class="col-12">
             <div class="card">
              <div class="card-body">
                <form action="{{route('saveProfile')}}" method="post" enctype = "multipart/form-data">
                   @csrf  
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
                        <input type="date" name="dob" id="dob" class="form-control" placeholder="D.O.B" required value="{{@$petData->dob}}">
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
                    <div class="col-lg-6 mb-2">
                      <div class="form-group">
                        <label class="text-label">Image</label>
                         <input type="file" name="file" class="form-control" required="">
                          
                            @if(!empty($petData->photo))
                            <img src="{{@$petData->photo}}" width="150" height="150" alt=""/>
                            @endif

                      </div>
                    </div>

                  </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                 
                  </form>
              </div> 
            </div> 
             <center><a href="{{route('dashboard')}}"><h2 class="myh1 btn btn-primary"style="text-align: center; font-size: 20px; margin-bottom: 30px !important;">Back To Dashboard</h2></a></center>
             
          </div>
        </div>
            </div>
        </div>
@endsection


