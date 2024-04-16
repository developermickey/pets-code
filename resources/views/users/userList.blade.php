@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

 <div class="content-body">
            <!-- row -->
      <div class="container-fluid">
        
        <div class="row">
          <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">User List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th>S.N</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($user as $key => $value)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{$value->name}}</td>
                                                 <td>{{$value->email}}</td>
                                                 <td>{{$value->mobile}}</td>
                                                <td><span onclick="change_status({{$value->id}},'<?php echo ($value->status=='active')?"deactive":"active" ?>')" class="btn btn-sm btn-<?php echo ($value->status=='active')?'success':'danger' ?>">{{ ucfirst($value->status) }}</span></td>
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
 <script type="text/javascript">
        function change_status(id,status)
        {
         $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            url : "{{ url('change-status') }}",
            data : {id,status},
            type : 'post',
            dataType : 'json',
            success : function(result){

              if(result.status)
              {
                swal({
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
     </script> 
@endsection