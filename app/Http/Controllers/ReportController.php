<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
class ReportController extends Controller
{
  public function summary(Request $request)
  {
         $data = \DB::table("pet_registration")->get();

            $name = "Report_".date('Y/m/d').".csv";
            $headers = [
                'Content-Disposition' => 'attachment; filename='. $name,
            ];
            $colom = array();
        
           return response()->stream(function() use($colom, $data){
                $file = fopen('php://output', 'w');
                $main_title[] ='';
                $main_title[] ='';
                $main_title[] ='';
                $main_title[] ='';
                $main_title[] =''; 
                $main_title[] =''; 
                $main_title[] =''; 
                $main_title[] =''; 
                $main_title[] = 'PETS REGISTRATION REPORT';
                fputcsv($file, $main_title);
           
                $title[] = "S.N";
                $title[] = "Name Of Applicant";
                $title[] = "Father Name";
                $title[] = "Email";
                $title[] = "Mobile";
                $title[] = "Address";
                $title[] = "Dog Name";
                $title[] = "Dog Gender";
                $title[] = "Dog Breed";
                $title[] = "Dog Color";
                $title[] = "Dog Age";
                $title[] = "Immunized";
                $title[] = "Certificate";
                $title[] = "1st Passport Size";
                $title[] = "2nd Passport Size";
                $title[] = "Owner Photo";
                $title[] = "Owner Proof Photo";
                $title[] = "Sterilization Certificate";
                $title[] = "Vaccination Card";
                fputcsv($file, $title);
                $count='1';
                foreach ($data as $key => $value) {


                     $datas['sn']                                = $count;
                     $datas['name_of_applicant']                 = $value->name_of_applicant;
                     $datas['father_name']                       = $value->father_name;
                     $datas['email']                             = $value->email;
                     $datas['mobile']                            = $value->mobile;
                     $datas['address']                           = $value->address;
                     $datas['dog_name']                          = $value->dog_name;
                     $datas['dog_gender']                        = $value->dog_gender;
                     $datas['dog_breed']                         = $value->dog_breed;
                     $datas['dog_color']                         = $value->dog_color;
                     $datas['age_in_month']                      = $value->age_in_year.' Years  '.$value->age_in_year.' Month';
                     $datas['immunized']                          = ($value->immunized=='1')?'Yes':'NO';
                     $datas['certificate']                        = ($value->certificate=='1')?'Yes':'NO';
                     $datas['st_passport_size']                   = $value->st_passport_size;
                     $datas['nd_passport_size']                   = $value->nd_passport_size;
                     $datas['owner_photo']                        = $value->owner_photo;
                     $datas['owner_proof_photo']                  = $value->owner_proof_photo;
                     $datas['sterilization_certificate']          = $value->sterilization_certificate;
                     $datas['vaccination_card']                   = $value->vaccination_card;
                     $datas['veterinary_health_certificate']      = $value->veterinary_health_certificate;
                  
                   // array_unshift($data, $count++);
                    $count++;
                    //unset($datas[$key]);
                   fputcsv($file, $datas);
                }
          
           
                fclose($file);
            }, 200, $headers);
      
    }
   
}

