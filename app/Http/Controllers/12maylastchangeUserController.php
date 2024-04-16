<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Helpers\MyHelper;
use Dompdf\Dompdf;
class UserController extends Controller
{
    public function login(Request $post)
    {
        
        $user = User::where('email', $post->email)->first();
      
        if(!$user){
            return response()->json(['status' => "Your aren't registred with us." ], 400);
        } 

      
       
        if(!\Auth::validate(['email' => $post->email, 'password' => $post->password])){
            return response()->json(['status'=> 'Username or password is incorrect'], 400);
        }

        if (!\Auth::validate(['email' => $post->email, 'password' => $post->password,'status'=> "active"])) {
            return response()->json(['status' => 'Your account currently de-activated, please contact administrator'], 400);
        }
        
        

        if (\Auth::attempt(['email' =>$post->email, 'password' =>$post->password, 'status'=> "active"])) {
             
            return response()->json(['status' => 'Login','role'=>$user->role_id], 200);
        }else{
            return response()->json(['status' => 'Something went wrong, please contact administrator'], 400);
        }
    }


  public function forgotPasswordData(Request $post){

       $user = User::where(['email'=>$post->email,'mobile'=>$post->mobile])->first();
      
        if(!$user){
            return response()->json(['status' => "Your aren't registred with us." ], 400);
        }else{
        
          return response()->json(['status' => 'Login','id'=>$user->id], 200);

        }


  }


public function forgotPasswordData2(Request $post){


      if($post->newPassword != $post->confirmPassword){
        return response()->json(['status' => "New Password & confirmPassword does not matched." ], 400);
      }


       $user = User::where(['id'=>$post->user_id])->update(['password'=>Hash::make($post->newPassword),"view_password"=>$post->newPassword]);
      
       
           return response()->json(['status' => 'Login'], 200);
            
     


  }




    public function logout(Request $request)
    {
        \Auth::guard()->logout();
        $request->session()->invalidate();
        return redirect()->route('login');
    }

   public function userRegistration(Request $post){ 
  
   $rules = array(
          'name'      => 'required',
          'mobile'     => 'required|min:10|max:10',
          'email'      => 'required|email|unique:users',
          'password'   => 'required|min:6|max:10'
      );
      
      $validate = Myhelper::FormValidatorWeb($rules, $post);
        if($validate != "no"){
             return response()->json(['status'=> $validate], 400);
            
        }

   $checkMobile =\DB::table("users")->where('mobile',$post->mobile)->first();

    if(!empty($checkMobile)){
       return response()->json(['status'=> 'Mobile number already Exits.'], 400);
    }

    $user = \DB::table("users")->insert(["name" => $post->name,"mobile" => $post->mobile,"email" => $post->email,"password"=>Hash::make($post->password),"view_password"=>$post->password,'role_id'=>'user']);
 
    if($user){
           
        return response()->json(['status' => 'added'], 200);
      
    } else {
    
       return response()->json(['status' => 'Something went wrong, please try again.'], 400);
    }
      

 }


public function userList()
{
    $data = array();
    $user = User::where('role_id','user')->get();
    return view('users.userList',compact('user'));
}

public function petList()
{
    $data = array();
    $petData = \DB::table("pet_registration")->get();
    return view('pets.petList',compact('petData'));
}



public function support(){
 if(\Auth::user()->role_id=='admin'){
  $supportData =  \DB::table('chats')->orderBy('id','desc')->get();
 } else {
  $supportData = \DB::table('chats')->where('user_id', \Auth::user()->id)->orderBy('id','desc')->get();
 }
 return view('support.supportList',compact('supportData'));

}

public function sendMessage(Request $post){

  $message = \DB::table("chats")->insert(["user_id" => \Auth::user()->id,"user_name" => \Auth::user()->name,"user_query" => $post->textarea]);
 
    if($message){
           
        return redirect()->route('support')->with('message','Message  send successfully.');
      
    } else {
    
      return redirect()->route('support')->with('message','Something went wrong.');
    }

}

public function adminMessage(Request $post){

  $message = \DB::table("chats")->update(["id" => $post->user_id,"admin_reply" => $post->message]);
 
    $responce['status'] = 'true';
    $responce['message'] = 'User Reply successfully';
    return response()->json($responce); 

}

   

public function petForm()
{
  $petData = array();
  // $petData = \DB::table('pet_registration')->where('user_id', \Auth::user()->id)->first();
  $petsData = \DB::table('pet_registration')->where('user_id', \Auth::user()->id)->get();
  // dd($petsData);
   return view('pets.petForm',compact('petData','petsData'));
}



public function petReg()
{
  $data = array();
  $user = User::where('role_id','user')->get();
  $pet = \DB::table('pet_registration')->get();
  return view('auth.dashboard2',compact('user','pet'));
}


public function forgotPassword()
{
  return view('auth.page-forgot-password');
}

public function faq()
{
  return view('faq');
}

public function privacy_policy()
{
  return view('privacy_policy');
}

public function pricing()
{
  return view('pricing');
}

public function gallery()
{
  return view('gallery');
}

public function about()
{
  return view('about');
}

public function contact()
{
  return view('contact');
}

public function refund_policy()
{
  return view('refund_policy');
}

public function terms_conditions()
{
  return view('terms_conditions');
}

public function forgoPassword()
{
  $user_id = $_REQUEST['user_id'];
  return view('auth.final-forgot-password',compact('user_id'));
}


public function generatePDF()
{
  $APP_URL = env('APP_URL');
  $APP_URL = $APP_URL.'storage/app/public/form';

 if(\Auth::user()->role_id=='admin'){
   $petData = \DB::table('pet_registration')->where('id', @$_REQUEST['id'])->first();
 }else{
   $petData = \DB::table('pet_registration')->where('id', @$_REQUEST['id'])->first();
   // $petData = \DB::table('pet_registration')->where('user_id', \Auth::user()->id)->first();
 }


 
   $html ='';

    $html .= '<table cellpadding="0" cellspacing="0" style="line-height: 1;width:100%;">
      <tr >
        <td colspan="3" style="line-height: 1;text-align:center;">
          <img width="200" class="myalogo" src="'.$APP_URL.'/ri_1.png" alt="">
        </td>
      </tr>
      <tr>
        <td colspan="3"><center><h5 style="line-height: 1;text-decoration: underline; font-size: 15px; font-family: Roboto; font-weight: 700;  padding: 2px 0px 0px 0px;  "> APPLICATION FOR REGISTRATION OF DOG</h5></center></td>
      </tr>
      <tr>
        <td colspan="3" style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 400;"><span > To</span></td>
      </tr>';

      if(!empty($petData->owner_photo)){
      $html .= '<tr>
          <td style="padding: 10px 0px;line-height: 1;width:50px;"><span > </span></td>
          <td style="padding: 10px 0px;line-height: 1;font-family: Roboto; font-weight: 400; font-size: 15px;"><span > Licensing Officer,<br>
            Municipal Corporation,<br>
            Gurugram.</span></td>
          <td style="line-height: 1;text-align:right;"><img src="'.$petData->owner_photo.'" width="70" height="70"></td>
        </tr>';

      }


      

      $html .= '<tr style="line-height: 1;margin-top:-20px !important;">
        <td><span style="padding: 10px 0px;line-height: 1;width:50px;font-size: 15px;">Sub: </span></td>
        <td colspan="2" style="line-height: 1;padding: 0px 0px;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;">Application for Registration of Dog.</span></td>
      </tr>
     
      <tr>
        <td></td>
        <td colspan="2" style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400;">Kindly issue License of Registration of pet dog in Municipal Corporation, Gurugram area as<br>
          per following details : 
          </span></td>
      </tr>
      <tr>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;width:50px;font-size: 15px;">A. </span></td>
        <td colspan="2" style="line-height: 1;font-size: 15px;padding: 0px 0px;"><span style="padding: 10px 0px;line-height: 1;font-family: Roboto; font-weight: 600;"> Application Details:-</span></td>
      </tr>
      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td ><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> 1. Name of Applicant </span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-family: Roboto; font-weight: 400; padding: 10px 0px; text-decoration: underline;">'.@$petData->name_of_applicant.'</span></span></td>
      </tr>
      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> 2. Father’s / Husband’s Name  </span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-family: Roboto; font-weight: 400; padding: 10px 0px;text-decoration: underline;">'.@$petData->father_name.'</span></span></td>
      </tr>
      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;">3. Residential Address in Municipal Corporation</span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px; text-decoration: underline;">'.@$petData->address.'</span></span></td>
      </tr>
      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;">4. Contact No. & Email Address </span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px; text-decoration: underline;">'.@$petData->mobile.',&nbsp;&nbsp;'.@$petData->email.'</span></span></td>
      </tr>
      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;">5. Name of Dog  </span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px; text-decoration: underline;">'.@$petData->dog_name.'</span></span></td>
      </tr>
      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;">6. Gender</span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;text-decoration: underline;" >'.@$petData->dog_gender.'</span></span></td>
      </tr>
      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;">7. Breed of Dog.</span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;text-decoration: underline;">'.@$petData->dog_breed.'</span></span></td>
      </tr>
      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;">8. Colour of Dog</span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;text-decoration: underline;">'.@$petData->dog_color.'</span></span></td>
      </tr>
      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;">9. Age of the Dog </span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;text-decoration: underline;">'.@$petData->age_in_year.' Years  '.@$petData->age_in_month.'  Months</span></span></td>
      </tr>
      <tr>';
      if(@$petData->immunized=='1'){ $immunized=''; }else{$immunized='';}
      if(@$petData->certificate=='1'){$certificate='';}else{$certificate='';}
      if(!empty(@$petData->st_passport_size)){$st_passport=''; }else{$st_passport='';} 
      if(!empty(@$petData->nd_passport_size)){$nd_passport=''; }else{$nd_passport='';} 
      if(!empty(@$petData->owner_photo)){$owner_photo=''; }else{$owner_photo='';} 
      if(!empty(@$petData->owner_proof_photo)){$owner_proof_photo=''; }else{$owner_proof_photo='';} 
      if(!empty(@$petData->sterilization_certificate)){$sterilization_certificate=''; }else{$sterilization_certificate='';} 
      if(!empty(@$petData->vaccination_card)){$vaccination_card=''; }else{$vaccination_card='';} 
      if(!empty(@$petData->veterinary_health_certificate)){$veterinary_health_certificate=''; }else{$veterinary_health_certificate='';} 

        

         $html.= '<td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;">10. Has the dog been immunized till date?<br> 
          (Vaccination Card -Mandatory)</span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;text-decoration: underline;">'.$immunized.'</span></span></td>
      </tr>
      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;">11. If dog is 4 years old or above,<br>
          Attach Sterilization<br>
          Certificate(Mandatory,)</span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;text-decoration: underline;">'.$certificate.'</span></span></td>
      </tr>
      <tr>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;width:50px;font-size: 15px;">B. </span></td>
        <td colspan="2" style="line-height: 1;padding: 0px 0px;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 600;"> Enclosures / Attachments:-</span></td>
      </tr>

      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> 1. 2 Passport Size Photographs of Dog </span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-family: Roboto; font-weight: 400; padding: 0px 0px;">'.$st_passport.'</span></span></td>
      </tr>

      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> 2. 1 Photograph of dog with owner </span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;">'.$owner_photo.'</span></span></td>
      </tr>

      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;">3. Owner’s ID Proof with local address</span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;">'.$owner_proof_photo.'</span></span></td>
      </tr>

      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;">4. Veterinary Health Certificate of Dog </span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;">'.$veterinary_health_certificate.'</span></span></td>
      </tr>

      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;">5. Vaccination Card of Dog  </span></td>
        <td style="padding: 10px 0px;line-height: 1;font-size: 15px; font-family: Roboto; font-weight: 600;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;">'.$vaccination_card.'</span></span></td>
      </tr>

      <tr>
        <td style="padding: 10px 0px;line-height: 1;width:50px;"><span ></span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;">6. Sterilization Certificate of Dog.</span></td>
        <td><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 0px 0px;"> : <span style="line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;">'.$sterilization_certificate.'</span></span></td>
      </tr>';

      // $html .= '<tr>
      //   <td style="line-height: 1;padding: 40px 0px;"><span style="padding: 10px 0px;line-height: 1;width:50px;"></span></td>
      //   <td style="line-height: 1;padding: 40px 0px;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;">Date</span></td>
      //   <td style="line-height: 1;padding: 40px 0px;"><span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;"><span style="line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;">Signature of Applicant</span></span></td>
      // </tr>';
      $html .= '<br>';
      if(!empty($petData->signature)){
      $html .= '<tr>
          <td style="padding: 10px 0px;line-height: 1;width:50px;"><span > </span></td>
          <td style="padding: 10px 0px;line-height: 1;font-family: Roboto; font-weight: 400; font-size: 15px;"><span ></span></td>
          <td style="text-align:left;"><img src="'.$petData->signature.'" width="70" height="50"></td>
        </tr>';

      }

      $html .= '<tr>
        <td style="line-height: 1;padding: 10px 0px;">
          <span style="padding: 10px 0px;line-height: 1;width:50px;"></span>
        </td>
        <td style="line-height: 1;padding: 10px 0px;">
          <span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;">Date</span>
        </td>
        <td style="line-height: 1;padding: 10px 0px;">
          <span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;">Signature of Applicant</span>
        </td>
      </tr>';

      $html .= '<br><tr>
        <td colspan="3" style="line-height: 1;padding: 30px 0px;text-align:center;">
          <span style="padding: 10px 0px;line-height: 1;font-size: 20px;font-family: Roboto; font-weight: 700;">Affidavit</span>
        </td>
      </tr>';

      $html .= '<tr>
        <td style="padding: 30px 0px;"> <h3 style="width:50px;"></h3></td>
        <td colspan="2"><span style="line-height:1.5;font-family: Roboto; font-weight: 400; padding: 5px 0px;"> I_________________S/W/o_________________resident of _______________________ will ensure
          strict compliance of the following instructions/guidelines/advisories : </span></td>
      </tr>
      <tr>
        <td><h3 style="width:50px;"></h3></td>
        <td colspan="2"><span style="font-family: Roboto; font-weight: 400; padding: 5px 0px;">(i) I will take proper treatment, care and shelter of his pet dog. </span></td>
      </tr>
      <tr>
        <td><h3 style="width:50px;"></h3></td>
        <td colspan="2"><span style="font-family: Roboto; font-weight: 400; padding: 5px 0px;">(ii) I will ensure 5 freedom of animals, as decided by the court of law.</span></td>
      </tr>
      <tr>
        <td><h3 style="width:50px;"></h3></td>
        <td colspan="2"><span style="font-family: Roboto; font-weight: 400; padding: 5px 0px;">(iii) I will follow Bye laws of Haryana Municipal Act-1994.</span></td>
      </tr>
      <tr>
        <td><h3 style="width:50px;"></h3></td>
        <td colspan="2"><span style="line-height:1.5;font-family: Roboto; font-weight: 400; padding: 5px 0px;">(iv) I will follow all Circular guidelines and advisories which is issued by Animal Welfare Board
          <br>of India. (AWBI). </span></td>
      </tr>
      <tr>
        <td style="padding: 15px 0px;"><h3 style="width:50px;"></h3></td>
        <td colspan="2"><span style="line-height:1.5;font-family: Roboto; font-weight: 400; padding: 5px 0px;">(v) I will follow all communications conveyed by the District Society for Prevention of Cruelty<br>to Animals(DSCPA), Gurugram. </span></td>
      </tr>
      <tr>
        <td style="padding: 15px 0px;"><h3 style="width:50px;"></h3></td>
        <td colspan="2"><span style="line-height:1.5;font-family: Roboto; font-weight: 400; padding: 5px 0px;">(vi) I will ensure for proper Anti-Rabies vaccination of his pet dog as per instructions of<br>veterinary surgeon. </span></td>
      </tr>
      <tr>
        <td style="padding: 15px 0px;"><h3 style="width:50px;"></h3></td>
        <td colspan="2"><span style="line-height:1.5;font-family: Roboto; font-weight: 400; padding: 5px 0px;">(vii) I will ensure that my pet dog shall wear a collar to which shall be attached a metal<br>token.  </span></td>
      </tr>
      <tr>
        <td style="padding: 15px 0px;"><h3 style="width:50px;"></h3></td>
        <td colspan="2"><span style="line-height:1.5;font-family: Roboto; font-weight: 400; padding: 5px 0px;">(viii) I shall keep the dog on leash when brought out at public places and it is guarded so that
          <br>it does not bite anyone. I will also ensure that my dog shall also carry an eco friendly<br>
          disposable bag for scooping the poo/shit of the dog and dispose off it properly to maintain<br>
          hygiene and cleanliness at public places. </span></td>
      </tr>
      <tr>
        <td style="padding: 15px 0px;"><h3 style="width:50px;"></h3></td>
        <td colspan="2"><span style="line-height:1.5;font-family: Roboto; font-weight: 400; padding: 5px 0px;">(ix) I also confirm that there is no pending litigation OR Court Case in any Hon’ble Court in
          <br>India relating to my Pet Dog. </span></td>
      </tr>';


      if(!empty($petData->signature)){
      $html .= '<tr>
          <td style="padding: 10px 0px;line-height: 1;width:50px;"><span > </span></td>
          <td style="padding: 10px 0px;line-height: 1;font-family: Roboto; font-weight: 400; font-size: 15px;"><span ></span></td>
          <td style="text-align:left;"><img src="'.$petData->signature.'" width="70" height="50"></td>
        </tr>';

      }

      $html .= '<tr>
        <td style="line-height: 1;padding: 10px 0px;">
          <span style="padding: 10px 0px;line-height: 1;width:50px;"></span>
        </td>
        <td style="line-height: 1;padding: 10px 0px;">
          <span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;">Date</span>
        </td>
        <td style="line-height: 1;padding: 10px 0px;">
          <span style="padding: 10px 0px;line-height: 1;font-size: 15px;font-family: Roboto; font-weight: 400; padding: 10px 0px;">Signature of Applicant</span>
        </td>
      </tr>';



      if(!empty($petData->st_passport_size)){

         $html.= '<tr>
        <td colspan="3" style="padding: 0px 20px;line-height: 1;text-align:center;">
          <img width="300" style="padding: 0px 20px;" class="myalogo" src="'.$petData->st_passport_size.'" alt="">
        </td>
        </tr> <br>';

      }

      
      
    if(!empty($petData->owner_proof_photo)){
      $html.= '<tr>
        <td colspan="3" style="padding: 0px 20px;line-height: 1;text-align:center;">
         <img width="300" style="padding: 0px 20px;" class="myalogo" src="'.$petData->owner_photo.'" alt="">
        </td>
      </tr>';

    }


    if(!empty($petData->owner_proof_photo)){
      $html.= '<tr>
        <td colspan="3" style="padding: 0px 20px;line-height: 1;text-align:center;">
         <img width="800" style="padding: 0px 20px;" class="myalogo" src="'.$petData->owner_proof_photo.'" alt="">
        </td>
      </tr>';

    }


  
    if(!empty($petData->sterilization_certificate)){

      $html.= '<tr>
        <td colspan="3" style="padding: 0px 20px;line-height: 1;text-align:center;">
         <img width="800" style="padding: 0px 20px;" class="myalogo" src="'.$petData->sterilization_certificate.'" alt="">
        </td>
      </tr>';
     }



 if(!empty($petData->vaccination_card)){
      $html.= '<tr>
        <td colspan="3" style="padding: 0px 20px;line-height: 1;text-align:center;">
         <img width="800" style="padding: 0px 20px;" class="myalogo" src="'.$petData->vaccination_card.'" alt="">
        </td>
      </tr>';
}



 if(!empty($petData->veterinary_health_certificate)){
      $html.= '<tr>
        <td colspan="3" style="line-height: 1;text-align:center;">
         <img width="800" style="padding: 0px 20px;" class="myalogo" src="'.$petData->veterinary_health_certificate.'" alt="">
        </td>
      </tr>';
} 
     
    $html.= '</table>'; 
    // echo "<pre>";print_r($html);exit();
 /*  echo $html; exit;*/
    $pdf = new Dompdf();
    $options = $pdf->getOptions();
    $options->setChroot(app_path());
    $options->setIsRemoteEnabled(true);
    $options->IsFontSubsettingEnabled(false);
    $pdf->setOptions($options);
    $pdf->loadHtml($html,'UTF-8');//echo $output;
    $pdf->setPaper('A4', 'portrait');
    $pdf->render();

    // $pdf->stream("dompdf_out.pdf", array("Attachment" => false));
    // exit();
    return $pdf->stream();
}

public function petInfo()
{
  $petsData = \DB::table('pet_registration')->where('user_id', \Auth::user()->id)->get();
   return view('pets.petInfonew',compact('petsData'));
}

public function petDetails($id)
{

  $petsData = array();
  $petData = \DB::table('pet_registration')->where('id', $id)->first();
  // dd($petData);
   return view('pets.petInfo',compact('petData','petsData'));
}

public function petDelete($id)
{
  // dd($id);
  $petData = \DB::table('pet_registration')->where('id', $id)->delete();
  return redirect()->back()->with('message','Data Delete successfully.');
}

public function editPetDetails($id)
{

  $petData = \DB::table('pet_registration')->where('id', $id)->first();
  // dd($petData);
   return view('pets.petUpdateForm',compact('petData'));
}

public function updatePetdetails(Request $request)
{

  // $petsData = \DB::table('pet_registration')->where('id', $id)->first();
  // dd($request);

  $update_id = $request->update_id;
  $insertArray["user_id"] = \Auth::user()->id;
  $insertArray["name_of_applicant"] = $request->name_of_applicant;
  $insertArray["father_name"] = $request->father_name;
  $insertArray["email"] = $request->email;
  $insertArray['mobile'] = $request->mobile;
  $insertArray['address'] = $request->address;
  $insertArray['step1'] = '1';

  $insertArray["dog_name"] = $request->dog_name;
  $insertArray["dog_gender"] = $request->dog_gender;
  $insertArray["dog_breed"] = $request->dog_breed;
  $insertArray['dog_color'] = $request->dog_color;
  $insertArray['age_in_month'] = $request->age_in_month;
  $insertArray['age_in_year'] = $request->age_in_year;
  $insertArray['dob'] = $request->dob;
  $insertArray['step2'] = '1';


  $base_url = env('APP_URL');


  if($request->hasFile('1st_passport_size')) {

    $st_passport_size_ext = $request->file('1st_passport_size')->getClientOriginalExtension();
    $st_passport_size_image = 'profile-' . time() . '.' . $st_passport_size_ext;
    $st_passport_size = $base_url.'/storage/app/public/pet_document/'.$st_passport_size_image;
    $path = $request->file('1st_passport_size')->move(storage_path('app/public/pet_document'), $st_passport_size_image);

    $insertArray['st_passport_size'] = $st_passport_size;

  }
   

  if($request->hasFile('owner_photo')) {

    $owner_photo_ext = $request->file('owner_photo')->getClientOriginalExtension();
    $owner_photo_ext_image = 'owner_photo-' . time() . '.' . $owner_photo_ext;
    $owner_photo = $base_url.'/storage/app/public/pet_document/'.$owner_photo_ext_image;
    $path = $request->file('owner_photo')->move(storage_path('app/public/pet_document'), $owner_photo_ext_image);

    $insertArray['owner_photo'] = $owner_photo;

  }  

  if($request->hasFile('owner_proof_photo')) {
    $img_ext2 = $request->file('owner_proof_photo')->getClientOriginalExtension();
    $owner_proof_photo_image = 'service_image-' . time() . '.' . $img_ext2;
    $owner_proof_photo = $base_url.'/storage/app/public/pet_document/'.$owner_proof_photo_image;
    $path = $request->file('owner_proof_photo')->move(storage_path('app/public/pet_document'), $owner_proof_photo_image);
  $insertArray['owner_proof_photo'] = $owner_proof_photo;

  }

  if($request->hasFile('sterilization_certificate')) {
    $st_passport_size_ext2 = $request->file('sterilization_certificate')->getClientOriginalExtension();
    $st_passport_size_image2 = 'sterilization_certificate-' . time() . '.' . $st_passport_size_ext2;
    $sterilization_certificate = $base_url.'/storage/app/public/pet_document/'.$st_passport_size_image2;
    $path = $request->file('sterilization_certificate')->move(storage_path('app/public/pet_document'), $st_passport_size_image2);
  $insertArray['sterilization_certificate'] = $sterilization_certificate;

  }

  if($request->hasFile('vaccination_card')) {
    $owner_photo_ext2 = $request->file('vaccination_card')->getClientOriginalExtension();
    $owner_photo_ext_image2 = 'vaccination_card-' . time() . '.' . $owner_photo_ext2;
    $vaccination_card = $base_url.'/storage/app/public/pet_document/'.$owner_photo_ext_image2;
    $path = $request->file('vaccination_card')->move(storage_path('app/public/pet_document'), $owner_photo_ext_image2);
  $insertArray['vaccination_card'] = $vaccination_card;

  }

  if($request->hasFile('veterinary_health_certificate')) {
    $img_ext3 = $request->file('veterinary_health_certificate')->getClientOriginalExtension();
    $service_image = 'veterinary_health_certificate-' . time() . '.' . $img_ext3;
    $veterinary_health_certificate = $base_url.'/storage/app/public/pet_document/'.$service_image;
    $path = $request->file('veterinary_health_certificate')->move(storage_path('app/public/pet_document'), $service_image);
  $insertArray['veterinary_health_certificate'] = $veterinary_health_certificate;

  }

  if($request->hasFile('signature')) {
    $img_ext4 = $request->file('signature')->getClientOriginalExtension();
    $sig_image = 'signature-' . time() . '.' . $img_ext4;
    $signature = $base_url.'/storage/app/public/pet_document/'.$sig_image;
    $path = $request->file('signature')->move(storage_path('app/public/pet_document'), $sig_image);

  $insertArray['signature'] = $signature;

  }

  $insertArray['step3'] = '1';
  $insertArray['step4'] = '1';


  $user = \DB::table("pet_registration")->where('id',$update_id)->update($insertArray);

   return redirect()->route('petForm')->with('message','Data Update successfully.');
   // return view('pets.petForm')->with('message','Data Update successfully.');
}
 
 public function profile(Request $request)
  {

    
      $data = \Auth::user()->id;
      $profileData = User::where('id',$data)->first();
      return view('auth.profile', compact('profileData'));
  }


 public function changeStatus(Request $request)
   {

    $update = \DB::table('users')->where('id', $request->id)->update(['status' => $request->status]);
 
    $responce['status'] = 'true';
    $responce['message'] = 'Status updated successfully';

    return response()->json($responce); 
   }

   public function changePaymentStatus(Request $request)
   {

    $update = \DB::table('pet_registration')->where('id', $request->id)->update(['payment_status' => $request->status]);
 
    $responce['status'] = 'true';
    $responce['message'] = 'Payment Status updated successfully';

    return response()->json($responce); 
   }

  public function profile_update(Request $request)
    {
    
      $rules = array(
        'name'      => 'required',
        'email'      => 'unique:users,email,'.$request->user_id,
        'mobile'     => 'unique:users,mobile,'.$request->user_id
    );

    $validate = Myhelper::FormValidatorWeb($rules, $request);
    if($validate != "no"){
       return response()->json(['status'=> $validate], 400);
    }
    $base_url = env('APP_URL');
   
        $data = $request->name;
        $updateArray['name'] = $request->name;
        $updateArray['email'] = $request->email;
        $updateArray['mobile'] = $request->mobile;
        
        if(!empty($request->password))
        {
            $updateArray['password'] = Hash::make($request->password);
        }

        if($request->hasFile('file')) {
        
          $img_ext = $request->file('file')->getClientOriginalExtension();
          $service_image = 'profile-' . time() . '.' . $img_ext;
          $service_image_link = $base_url.'/storage/app/public/profile_image/'.$service_image;
          $path = $request->file('file')->move(storage_path('app/public/profile_image'), $service_image);

        }

        if(!empty($service_image_link))
        {
            $updateArray['profile'] =  $service_image_link;
        }

      
        $update = \DB::table('users')->where('id', \Auth::user()->id)->update($updateArray);

       return redirect()->route('dashboard')->with('message','Profile Update successfully.');
    }


  public function saveStep1(Request $post){ 

    $petData = \DB::table('pet_registration')->where('user_id', \Auth::user()->id)->first();

    if(empty($petData)) {
      $user = \DB::table("pet_registration")->insert(["user_id" => \Auth::user()->id,"name_of_applicant" => $post->name_of_applicant,"father_name" => $post->father_name,"email"=>$post->email,'mobile'=>$post->mobile,'address'=>$post->address,'step1'=>'1']);
    } else {

      $user = \DB::table("pet_registration")->where('user_id',\Auth::user()->id)->update(["name_of_applicant" => $post->name_of_applicant,"father_name" => $post->father_name,"email"=>$post->email,'mobile'=>$post->mobile,'address'=>$post->address,'step1'=>'1']);
    }
  
   
           
    return redirect()->route('petForm#wizard_Service')->with('message','Data Save successfully.');
      
  
      

 }


 public function saveStep2(Request $post){ 
  
    $user = \DB::table("pet_registration")->where('user_id',\Auth::user()->id)
    ->update(["dog_name"=>$post->dog_name,"dog_gender"=>$post->dog_gender,"dog_breed"=>$post->dog_breed,'dog_color'=>$post->dog_color,'age_in_month'=>$post->age_in_month,'age_in_year'=>$post->age_in_year,'dob'=>$post->dob,'step2'=>'1']);
 
     
        return redirect()->route('petForm#wizard_Time')->with('message','Data Save successfully.');
      

 }

 public function saveStep3(Request $request){
 
        $base_url = env('APP_URL');


        if($request->hasFile('1st_passport_size')) {

          $st_passport_size_ext = $request->file('1st_passport_size')->getClientOriginalExtension();
          $st_passport_size_image = 'profile-' . time() . '.' . $st_passport_size_ext;
          $st_passport_size = $base_url.'/storage/app/public/pet_document/'.$st_passport_size_image;
          $path = $request->file('1st_passport_size')->move(storage_path('app/public/pet_document'), $st_passport_size_image);

          $updateArray['st_passport_size'] = $st_passport_size;

      }
         

       if($request->hasFile('owner_photo')) {

          $owner_photo_ext = $request->file('owner_photo')->getClientOriginalExtension();
          $owner_photo_ext_image = 'owner_photo-' . time() . '.' . $owner_photo_ext;
          $owner_photo = $base_url.'/storage/app/public/pet_document/'.$owner_photo_ext_image;
          $path = $request->file('owner_photo')->move(storage_path('app/public/pet_document'), $owner_photo_ext_image);

          $updateArray['owner_photo'] = $owner_photo;

      }  

        if($request->hasFile('owner_proof_photo')) {
          $img_ext2 = $request->file('owner_proof_photo')->getClientOriginalExtension();
          $owner_proof_photo_image = 'service_image-' . time() . '.' . $img_ext2;
          $owner_proof_photo = $base_url.'/storage/app/public/pet_document/'.$owner_proof_photo_image;
          $path = $request->file('owner_proof_photo')->move(storage_path('app/public/pet_document'), $owner_proof_photo_image);
       $updateArray['owner_proof_photo'] = $owner_proof_photo;

      }

      if($request->hasFile('sterilization_certificate')) {
          $st_passport_size_ext2 = $request->file('sterilization_certificate')->getClientOriginalExtension();
          $st_passport_size_image2 = 'sterilization_certificate-' . time() . '.' . $st_passport_size_ext2;
          $sterilization_certificate = $base_url.'/storage/app/public/pet_document/'.$st_passport_size_image2;
          $path = $request->file('sterilization_certificate')->move(storage_path('app/public/pet_document'), $st_passport_size_image2);
      $updateArray['sterilization_certificate'] = $sterilization_certificate;

      }
       
      if($request->hasFile('vaccination_card')) {
          $owner_photo_ext2 = $request->file('vaccination_card')->getClientOriginalExtension();
          $owner_photo_ext_image2 = 'vaccination_card-' . time() . '.' . $owner_photo_ext2;
          $vaccination_card = $base_url.'/storage/app/public/pet_document/'.$owner_photo_ext_image2;
          $path = $request->file('vaccination_card')->move(storage_path('app/public/pet_document'), $owner_photo_ext_image2);
       $updateArray['vaccination_card'] = $vaccination_card;

      }

       if($request->hasFile('veterinary_health_certificate')) {
          $img_ext3 = $request->file('veterinary_health_certificate')->getClientOriginalExtension();
          $service_image = 'veterinary_health_certificate-' . time() . '.' . $img_ext3;
          $veterinary_health_certificate = $base_url.'/storage/app/public/pet_document/'.$service_image;
          $path = $request->file('veterinary_health_certificate')->move(storage_path('app/public/pet_document'), $service_image);
       $updateArray['veterinary_health_certificate'] = $veterinary_health_certificate;

      }

      if($request->hasFile('signature')) {
          $img_ext4 = $request->file('signature')->getClientOriginalExtension();
          $sig_image = 'signature-' . time() . '.' . $img_ext4;
          $signature = $base_url.'/storage/app/public/pet_document/'.$sig_image;
          $path = $request->file('signature')->move(storage_path('app/public/pet_document'), $sig_image);

       $updateArray['signature'] = $signature;

      }

     $updateArray['step3'] = '1';
     $updateArray['step4'] = '1';

      $user = \DB::table("pet_registration")->where('user_id',\Auth::user()->id)->update($updateArray);
    
  
     return redirect()->route('petForm#wizard_Details')->with('message','Data Save successfully.');
      
  

 }

public function savePetRegistration(Request $request){
  // dd($request);
  // $petData = \DB::table('pet_registration')->where('user_id', \Auth::user()->id)->first();

    // if(empty($petData)) {

      $insertArray["user_id"] = \Auth::user()->id;
      $insertArray["name_of_applicant"] = $request->name_of_applicant;
      $insertArray["father_name"] = $request->father_name;
      $insertArray["email"] = $request->email;
      $insertArray['mobile'] = $request->mobile;
      $insertArray['address'] = $request->address;
      $insertArray['step1'] = '1';

      $insertArray["dog_name"] = $request->dog_name;
      $insertArray["dog_gender"] = $request->dog_gender;
      $insertArray["dog_breed"] = $request->dog_breed;
      $insertArray['dog_color'] = $request->dog_color;
      $insertArray['age_in_month'] = $request->age_in_month;
      $insertArray['age_in_year'] = $request->age_in_year;
      $insertArray['dob'] = $request->dob;
      $insertArray['step2'] = '1';


      $base_url = env('APP_URL');


      if($request->hasFile('1st_passport_size')) {

        $st_passport_size_ext = $request->file('1st_passport_size')->getClientOriginalExtension();
        $st_passport_size_image = 'profile-' . time() . '.' . $st_passport_size_ext;
        $st_passport_size = $base_url.'/storage/app/public/pet_document/'.$st_passport_size_image;
        $path = $request->file('1st_passport_size')->move(storage_path('app/public/pet_document'), $st_passport_size_image);

        $insertArray['st_passport_size'] = $st_passport_size;

      }
       

      if($request->hasFile('owner_photo')) {

        $owner_photo_ext = $request->file('owner_photo')->getClientOriginalExtension();
        $owner_photo_ext_image = 'owner_photo-' . time() . '.' . $owner_photo_ext;
        $owner_photo = $base_url.'/storage/app/public/pet_document/'.$owner_photo_ext_image;
        $path = $request->file('owner_photo')->move(storage_path('app/public/pet_document'), $owner_photo_ext_image);

        $insertArray['owner_photo'] = $owner_photo;

      }  

      if($request->hasFile('owner_proof_photo')) {
        $img_ext2 = $request->file('owner_proof_photo')->getClientOriginalExtension();
        $owner_proof_photo_image = 'service_image-' . time() . '.' . $img_ext2;
        $owner_proof_photo = $base_url.'/storage/app/public/pet_document/'.$owner_proof_photo_image;
        $path = $request->file('owner_proof_photo')->move(storage_path('app/public/pet_document'), $owner_proof_photo_image);
      $insertArray['owner_proof_photo'] = $owner_proof_photo;

      }

      if($request->hasFile('sterilization_certificate')) {
        $st_passport_size_ext2 = $request->file('sterilization_certificate')->getClientOriginalExtension();
        $st_passport_size_image2 = 'sterilization_certificate-' . time() . '.' . $st_passport_size_ext2;
        $sterilization_certificate = $base_url.'/storage/app/public/pet_document/'.$st_passport_size_image2;
        $path = $request->file('sterilization_certificate')->move(storage_path('app/public/pet_document'), $st_passport_size_image2);
      $insertArray['sterilization_certificate'] = $sterilization_certificate;

      }

      if($request->hasFile('vaccination_card')) {
        $owner_photo_ext2 = $request->file('vaccination_card')->getClientOriginalExtension();
        $owner_photo_ext_image2 = 'vaccination_card-' . time() . '.' . $owner_photo_ext2;
        $vaccination_card = $base_url.'/storage/app/public/pet_document/'.$owner_photo_ext_image2;
        $path = $request->file('vaccination_card')->move(storage_path('app/public/pet_document'), $owner_photo_ext_image2);
      $insertArray['vaccination_card'] = $vaccination_card;

      }

      if($request->hasFile('veterinary_health_certificate')) {
        $img_ext3 = $request->file('veterinary_health_certificate')->getClientOriginalExtension();
        $service_image = 'veterinary_health_certificate-' . time() . '.' . $img_ext3;
        $veterinary_health_certificate = $base_url.'/storage/app/public/pet_document/'.$service_image;
        $path = $request->file('veterinary_health_certificate')->move(storage_path('app/public/pet_document'), $service_image);
      $insertArray['veterinary_health_certificate'] = $veterinary_health_certificate;

      }

      if($request->hasFile('signature')) {
        $img_ext4 = $request->file('signature')->getClientOriginalExtension();
        $sig_image = 'signature-' . time() . '.' . $img_ext4;
        $signature = $base_url.'/storage/app/public/pet_document/'.$sig_image;
        $path = $request->file('signature')->move(storage_path('app/public/pet_document'), $sig_image);

      $insertArray['signature'] = $signature;

      }

      $insertArray['step3'] = '1';
      $insertArray['step4'] = '1';

      $user = \DB::table("pet_registration")->insert($insertArray);
    // }
  
   
           
    return redirect()->route('petForm')->with('message','Data Save successfully.');
    // return redirect()->route('petForm#wizard_Service')->with('message','Data Save successfully.');
}


public function finalSubmit(Request $request){

        $base_url = env('APP_URL');
 

      if($request->hasFile('sterilization_certificate')) {
          $st_passport_size_ext = $request->file('sterilization_certificate')->getClientOriginalExtension();
          $st_passport_size_image = 'sterilization_certificate-' . time() . '.' . $st_passport_size_ext;
          $sterilization_certificate = $base_url.'/storage/app/public/pet_document/'.$st_passport_size_image;
          $path = $request->file('sterilization_certificate')->move(storage_path('app/public/pet_document'), $st_passport_size_image);

      } else {
    
      $sterilization_certificate ='';

     }

          $owner_photo_ext = $request->file('vaccination_card')->getClientOriginalExtension();
          $owner_photo_ext_image = 'vaccination_card-' . time() . '.' . $owner_photo_ext;
          $vaccination_card = $base_url.'/storage/app/public/pet_document/'.$owner_photo_ext_image;
          $path = $request->file('vaccination_card')->move(storage_path('app/public/pet_document'), $vaccination_card);


          $img_ext = $request->file('veterinary_health_certificate')->getClientOriginalExtension();
          $service_image = 'veterinary_health_certificate-' . time() . '.' . $img_ext;
          $veterinary_health_certificate = $base_url.'/storage/app/public/pet_document/'.$service_image;
          $path = $request->file('veterinary_health_certificate')->move(storage_path('app/public/pet_document'), $service_image);

  
    $user = \DB::table("pet_registration")->where('user_id',\Auth::user()->id)
    ->update(["veterinary_health_certificate"=>$veterinary_health_certificate,"vaccination_card"=>$vaccination_card,'sterilization_certificate'=>$sterilization_certificate,'step4'=>'1']);
 
    if($user){
           
        return redirect()->route('petForm#wizard_Payment')->with('message','Data Save successfully.');
      
    } else {
    
      return redirect()->route('petForm#wizard_Payment')->with('message','Something went wrong.');
    }
      

 }


  public function yourPet()
  {
    $petsData = \DB::table('pet_profile')->where('user_id', \Auth::user()->id)->get();
    return view('pets.yourPet',compact('petsData'));
  }

  public function editYourPet($id)
  { 

    $petsData = array();
    $petData = \DB::table('pet_profile')->where('id', $id)->first();
    // dd($petData);
    return view('pets.yourPetUpdate',compact('petData','petsData'));
  }


public function saveProfile(Request $request){

        $base_url = env('APP_URL');

        $update_id           = $request->update_id;
        $updateArray['dog_name']           = $request->dog_name;
        $updateArray['dog_gender']         = $request->dog_gender;
        $updateArray['dog_breed']          = $request->dog_breed;
        $updateArray['dog_color']          = $request->dog_color;
        $updateArray['dob']                = $request->dob;
        $updateArray['age_in_year']        = $request->age_in_year;
        $updateArray['age_in_month']       = $request->age_in_month;
        $updateArray['user_id']            = \Auth::user()->id;
        
        if($request->hasFile('file')) {
        
          $img_ext = $request->file('file')->getClientOriginalExtension();
          $service_image = 'profile-' . time() . '.' . $img_ext;
          $service_image_link = $base_url.'/storage/app/public/profile_image/'.$service_image;
          $path = $request->file('file')->move(storage_path('app/public/profile_image'), $service_image);
          $updateArray['photo'] =  $service_image_link;

        }


       // $check = \DB::table('pet_profile')->where('user_id', \Auth::user()->id)->first();

       if(empty($update_id)){
         $update = \DB::table('pet_profile')->insert($updateArray);
         $message = 'Inserted successfully.';
       }else{
         $update = \DB::table('pet_profile')->where('id', $update_id)->update($updateArray);
         $message = 'Update successfully.';
       }

       return redirect()->route('yourPet')->with('message',$message);
}

public function yourPetDelete($id)
{
  // dd($id);
  $petData = \DB::table('pet_profile')->where('id', $id)->delete();
  return redirect()->back()->with('message','Data Delete successfully.');
}







}

