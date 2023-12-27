<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_no',
        'appointment_date',
        'doctor_id',
        'patient_name',
        'patient_phone',
        'total_fee',
        'paid_amount',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public static function saveInfo($request, $id = null)
    {
        $appointment = ($id != null) ? Appointment::find($id) : new Appointment();

        $appointment->appointment_no = $request->appointment_no;
        $appointment->appointment_date = $request->appointment_date;
        $appointment->doctor_id = $request->doctor;
        $appointment->patient_name = $request->patient_name;
        $appointment->patient_phone = $request->patient_phone;
        $appointment->total_fee = $request->fee;
        $appointment->paid_amount = $request->paid_amount;

        $appointment->save();
    }
}
