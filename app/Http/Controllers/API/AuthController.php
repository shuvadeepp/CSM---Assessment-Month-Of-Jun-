<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppController;
use Illuminate\Http\Request;
use App\Models\AppModels;
use App\Models\patientsFrmModel;
use DB;

use Exception;
use Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;

use App\Http\Controllers\Controller;
use App\User;
use Validator;


class AuthController extends Controller
{
    public function requestOtp(Request $request)
    {
        echo 111;exit;
           $otp = rand(1000,9999);
           Log::info("otp = ".$otp);
           $patientsOTP = patientsFrmModel::where('email','=',$request->commEmail)->update(['otp' => $otp]);
   
           if($patientsOTP){
   
           $mail_details = [
               'subject' => 'Testing Application OTP',
               'body' => 'Your OTP is : '. $otp
           ];
          
            \Mail::to($request->commEmail)->send(new sendEmail($mail_details));
          
            return response(["status" => 200, "message" => "OTP sent successfully"]);
           }
           else{
               return response(["status" => 401, 'message' => 'Invalid']);
           }
    }


    public function verifyOtp(Request $request){
    
        $patientsVerify  = patientsFrmModel::where([['email','=',$request->commEmail],['otp','=',$request->otp]])->first();
        if($patientsVerify){
            auth()->login($patientsVerify, true);
            patientsFrmModel::where('email','=',$request->commEmail)->update(['otp' => null]);
            $accessToken = auth()->user()->createToken('authToken')->accessToken;

            return response(["status" => 200, "message" => "Success", 'user' => auth()->user(), 'access_token' => $accessToken]);
        }
        else{
            return response(["status" => 401, 'message' => 'Invalid']);
        }
    }
}
