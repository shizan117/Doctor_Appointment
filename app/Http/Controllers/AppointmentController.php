<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('appointment.index', [
            'doctors' => Doctor::all(),
            'departments'=>Department::all()
        ]);
    }
}
