<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AppModels;

class patientsFrmModel extends AppModels
{
    protected $table      = 'appointment_booking.patientsfrm';
	protected $primaryKey = 'intID';
}
