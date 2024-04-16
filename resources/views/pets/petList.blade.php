@extends('layouts.app')
<link rel="shortcut icon" href="{{asset('assets/img/favicon.ico') }}" type="image/x-icon">

@section('title', 'Dashboard')

@section('content')

 <div class="content-body">
            <!-- row -->
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Pet List  <a href="{{route('summary')}}" style="margin-left: 730px;"><button class="btn btn-info">Download Excel</button></a></h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>User</th>
                                                <th>Owner </th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Payment&nbsp;Status</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($petData as $key => $value)
                                          @php 
                                           $user =\DB::table("users")->where('id',$value->user_id)->first();
                                          @endphp
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{$user->name}}</td>
                                                 <td>{{$value->name_of_applicant}}</td>
                                                 <td>{{$value->email}}</td>
                                                 <td>{{$value->mobile}}</td>
                                                <td>
                                                     <!--onclick="change_payment_status({{$value->id}},'<?php // echo ($value->payment_status=='Pending')?"Completed":"Pending" ?>')"-->
                                                    <span
                                               
                                                class="btn btn-sm btn-<?php echo ($value->payment_status=='Completed')?'success':'danger' ?>">{{ ucfirst($value->payment_status) }}</span></td>
                                                <td><span class="btn btn-sm btn-<?php echo ($value->status=='Completed')?'success':'danger' ?>">{{ ucfirst($value->status) }}</span></td>
                                                <td><a href="{{route('petDetails',$value->id)}}">
                                                  <span class="btn btn-sm btn-info">View</span></a></td>
                                            </tr>
                                          @endforeach
                                          
                                            
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
        </div>
            </div>
        </div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script type="text/javascript">
        function change_payment_status(id,status)
        {
            Swal.fire({
              title: 'Are you sure?',
              text: "Complete this Action.",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        url : "{{ url('change-payment-status') }}",
                        data : {id,status},
                        type : 'post',
                        dataType : 'json',
                        success : function(result){

                          if(result.status)
                          {
                            Swal.fire({
                                  icon: 'success',
                                  // title : 'U',
                                  text: result.message,
                                  button: false,
                                  timer: 2000,
                            });
                            location.reload();
                          }
                        }
                    });
                }

              // if (result.isConfirmed) {
              //   swal(
              //     'Deleted!',
              //     'Your file has been deleted.',
              //     'success'
              //   )
              // }
            })

            
        
          // swal({
          //     title: "Are you sure?",
          //     text: 'Complete this Action.',
          //     icon: "warning",
          //     buttons: true,
          //     dangerMode: true,
          //     showCancelButton: true,
          //   })
          //   .then(function(isConfirm) {
          //         $.ajax({
          //           headers: {
          //               'X-CSRF-TOKEN': '{{ csrf_token() }}'
          //           },
          //           url : "{{ url('change-payment-status') }}",
          //           data : {id,status},
          //           type : 'post',
          //           dataType : 'json',
          //           success : function(result){

          //             if(result.status)
          //             {
          //               swal({
          //                     icon: 'success',
          //                     // title : 'U',
          //                     text: result.message,
          //                     button: false,
          //                     timer: 2000,
          //               });
          //               location.reload();
          //             }
          //           }
          //         });

          //   });

        }
     </script> 
@endsection