<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class HomeController extends Controller
{ public function index(Request $request)
{
    $query = Appointment::orderBy('created_at', 'desc');


    $search = $request->input('search');
    if ($search) {
        $query->where('appointment_no', 'like', "%$search%")
            ->orWhere('appointment_date', 'like', "%$search%")
            ->orWhere('doctor', 'like', "%$search%")
            ->orWhere('patient_name', 'like', "%$search%")
            ->orWhere('patient_phone', 'like', "%$search%");
    }

    $appointments = $query->paginate(10);

    return view('doctors.home.home', compact('appointments', 'search'));
}



}
