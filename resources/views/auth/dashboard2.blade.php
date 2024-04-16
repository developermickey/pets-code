@extends('layouts.app')

@section('title', 'Dashboard')

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
             <h3 style="text-align: center;">Hello! {{Auth::user()->name}}</h1>
             <br><br>
            <div class="row">
             
             <div class="col-xl-12 col-xxl-12 col-lg-12 col-sm-12 text-center"><a href="{{route('petForm')}}" ><span class="btn btn-sm btn-primary" style="text-align: center;">Pet Registration Gurugram</span></a></div>
           </div>
           <br><br>
            <div class="row">
              <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-end">
                      <div>
                        <p class="fs-14 mb-1">1st Passport Size Photographs of Dog</p>
                        <span class="fs-35 text-black font-w600">
                          {{ (!empty(@$petData->st_passport_size))?'Yes':'No'}}
                          <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                          </svg>
                        </span>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-end">
                      <div>
                        <p class="fs-14 mb-1">2nd Passport Size Photographs of Dog</p>
                        <span class="fs-35 text-black font-w600">{{ (!empty(@$petData->nd_passport_size))?'Yes':'No'}}
                          <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                          </svg>
                        </span>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-end">
                      <div>
                        <p class="fs-14 mb-1">1 Photograph of dog with owner</p>
                        <span class="fs-35 text-black font-w600">{{ (!empty(@$petData->owner_photo))?'Yes':'No'}}
                          <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                          </svg>
                        </span>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-end">
                      <div>
                        <p class="fs-14 mb-1">Owner’s ID Proof with local address</p>
                        <span class="fs-35 text-black font-w600">{{ (!empty(@$petData->owner_proof_photo))?'Yes':'No'}}
                          <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                          </svg>
                        </span>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-end">
                      <div>
                        <p class="fs-14 mb-1">Veterinary Health Certificate of Dog</p>
                        <span class="fs-35 text-black font-w600">{{ (!empty(@$petData->sterilization_certificate))?'Yes':'No'}}
                          <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                          </svg>
                        </span>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-end">
                      <div>
                        <p class="fs-14 mb-1">Vaccination Card of Dog</p>
                        <span class="fs-35 text-black font-w600">{{ (!empty(@$petData->vaccination_card))?'Yes':'No'}}
                          <svg class="ml-1" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#33C25B"/>
                          </svg>
                        </span>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-4 col-xxl-4 col-lg-4 col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex align-items-end">
                      <div>
                        <p class="fs-14 mb-1">Sterilization Certificate of Dog.</p>
                        <span class="fs-35 text-black font-w600">{{ (!empty(@$petData->veterinary_health_certificate))?'Yes':'No'}}
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

        @endif
            </div>
        </div>


@endsection