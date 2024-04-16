@extends('layouts.app')

@section('title', 'Support')

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
                            <div class="card-header">
                                <h4 class="card-title">Support</h4>
                            </div>
                            <div class="card-body">
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
                               @if(\Auth::user()->role_id=='user')
                                <form action="{{route('sendMessage')}}" method="post">
                                 @csrf
                                <textarea name="textarea" id="textarea" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please type what you want...." required=""></textarea>
                                <br>
                                <button type="submit" class="btn btn-info" style="float: right">Message</button>

                               </form>
                             <br><br><br>

                             @endif


                                <div class="table-responsive">
                                    <table id="example" class="display min-w850">
                                        <thead>
                                           @if(\Auth::user()->role_id=='admin')
                                            <tr>
                                                <th>S.N</th>
                                                <th>User</th>
                                                <th>User&nbsp;Query</th>
                                                <th>Reply&nbsp;To&nbsp;User</th>
                                                <th>Update</th>
                                            </tr>
                                            @else
                                           <tr>
                                                <th>S.N</th>
                                                <th>Message</th>
                                                <th>Admin&nbsp;Reply</th>
                                            </tr>

                                            @endif
                                        </thead>
                                        <tbody>
                                          @foreach ($supportData as $key => $value)

                                           @if(\Auth::user()->role_id=='admin')
                                            <tr>
                                                 <td>{{ ++$key }}</td>
                                                 <td>{{$value->user_name}}</td>
                                                 <td>{{$value->user_query}}</td>
                                                 <td>
                                                  <textarea class="form-control" name="post" id="post_{{$key}}" cols="5" rows="5">{{$value->admin_reply}}</textarea>
                                                  <input type="hidden" value="{{$value->id}}" id="id_{{$key}}">
                                                 <span id="reply_{{$key}}" style="color:red;"></span>
                                               </td>
                                                <td>
                                                   <button class="btn btn-sm btn-success" onclick="replyToUser({{$key}})">Reply To User </button>

                                                </td>
                                            </tr>
                                        @else
                                         <tr>
                                               <td>{{ ++$key }}</td>
                                               <td>{{$value->user_query}}</td>
                                               <td>{{$value->admin_reply}} </td>
                                    
                                          </tr>

                                        @endif

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
        function replyToUser(id)
        {
          let message = $('#post_'+id).val();
          let user_id = $('#id_'+id).val();
          if(message==''){
            $('#reply_'+id).text('Please fill this value first.');
            return false;
          }else{
            $('#reply_'+id).text('');
          }
      
         $.ajax({
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            url : "{{ url('adminMessage') }}",
            data : {message,user_id},
            type : 'post',
            dataType : 'json',
            success : function(result){

              if(result.status)
              {
                swal({
                      icon: 'success',
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