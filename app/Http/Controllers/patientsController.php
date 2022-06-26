<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AppController;
use Illuminate\Http\Request;
use App\Models\AppModels;
use App\Models\patientsFrmModel;
use DB;



class patientsController extends AppController
{
    /* PATIENT'S DATA INSERT */
    public function PatientData (Request $request) {
        // echo 111;exit;
        
        // $UserData    = AdminModel::where([['intID', session()->get('users_session_data.intID')]])->first();
        // echo'<pre>';print_r($UserData);exit;
        // $UserData    = json_decode(json_encode($UserData),true);


        if(!empty(request()->all()) && request()->isMethod('post')) {

            $requestData = request()->all();
            // echo'<pre>';print_r($requestData);exit;

            $validator   = \Validator::make($requestData, 
            [
                'vchPatientName'        => 'bail|required',
                'age'                   => 'bail|required',
                'gender'                => 'bail|required',
                'appDate'               => 'bail|required',
                'descArea'              => 'bail|required',
                'PatientAddress'        => 'bail|required',
                'commEmail'             => 'bail|required',
                'PatientMob'            => 'bail|required',
            ]);

            if ($validator->fails()) {
                return redirect('dashboard')->withErrors($validator)->withInput();
            } else {

                $patients = new patientsFrmModel;

                $patients -> vchPatientName                      = $requestData['vchPatientName'];
                $patients -> vchAge                        = $requestData['age'];
                $patients -> intGender                     = $requestData['gender'];
                $patients -> vchAppointDate                    = $requestData['appDate'];
                $patients -> vchDescription                   = $requestData['descArea'];
                $patients -> vchPatientAddrs             = $requestData['PatientAddress'];
                $patients -> vchCommEmail                  = $requestData['commEmail'];
                $patients -> intMob                 = $requestData['PatientMob']; 
                
                $patients->save();

            }
        }

        /* $bookinInfo  = DB::table('appointment_booking.patientsfrm')
        ->select('vchAppointDate')
        ->orderBy('intID','DESC')
        ->get(); */

        $bookinInfo = DB::table('appointment_booking.patientsfrm')
                ->select('vchAppointDate', DB::raw('count(*) as NoOfBookin'))
                ->groupBy('vchAppointDate')
                ->get();
                // echo'<pre>'; print_r($bookinInfo);exit;

        return view('application.dashboard', ['bookinInfo'=>$bookinInfo]);
        return view('application.dashboard')->with('status', 'patient Data Inserted successfully');
    }

    /* public function view (){ 

        $bookinInfo  = DB::table('appointment_booking.patientsfrm')
        ->select('vchAppointDate')
        ->orderBy('intID','DESC')
        ->get();
        // $bookinInfo = $bookinInfo->count();
        // echo'<pre>';print_R($bookinInfo);exit;

        // $this->viewVars['bookinInfo']    = $bookinInfo;
        return view('application.bookingTable', ['bookinInfo'=>$bookinInfo]);
        // return view('application.bookingTable');
    } */

    

}
