<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Storage; 
use Illuminate\Http\Request;
use DB;
class MyHelper {

    public static function FormValidator($rules, $post)
    {
        $validator = \Validator::make($post->all(), array_reverse($rules));
        if ($validator->fails()) {
            foreach ($validator->errors()->messages() as $key => $value) {
                $error = $value[0];
            }
            return response()->json(array(
                'statuscode' => 'ERR',  
                'message' => $error
            ));
        }else{
            return "no";
        }
    }

     public static function FormValidatorWeb($rules, $post)
    {
        $validator = \Validator::make($post->all(), array_reverse($rules));
        if ($validator->fails()) {
            foreach ($validator->errors()->messages() as $key => $value) {
                $error = $value[0];
            }
            return $error; 
        }else{
            return "no";
        }
    }

  public static function saveImage($folderPath,$image)
  {
   $base_url = env('APP_URL');
   $image = str_replace('data:image/jpeg;base64,', '', $image);
   $image = str_replace('data:image/png;base64,', '', $image);
   $image = str_replace(' ', '+', $image);
   $document  = $folderPath . time(). '.png';
   Storage::disk('public')->put($document, base64_decode($image));
    return $base_url."/storage/app/public/".$document;
  }




public static function curl($url , $method='GET', $parameters, $header, $log="no", $modal="none", $txnid="none")
 {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
        curl_setopt($curl, CURLOPT_ENCODING, "");
        curl_setopt($curl, CURLOPT_TIMEOUT, 180);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        if($parameters != ""){
            curl_setopt($curl, CURLOPT_POSTFIELDS, $parameters);
        }

        if(sizeof($header) > 0){
            curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        }
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        return ["response" => $response, "error" => $err, 'code' => $code];
    }


}