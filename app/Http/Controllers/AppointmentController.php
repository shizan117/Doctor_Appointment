<?php
namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{ public static $destroy;
    public function index()
    {
        $doctors = Doctor::orderBy('name', 'desc')->get();
        $departments = Department::orderBy('name', 'desc')->get();
        return view('appointment.index', compact('doctors', 'departments'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'doctor' => 'required|exists:doctors,id',

        ]);


        $selectedDoctorId = $request->input('doctor');
        $selectedDoctor = Doctor::find($selectedDoctorId);


        $request->merge(['fee' => $selectedDoctor->fee]);



        return redirect()->route('appointment.index')->with('success', 'Appointment created successfully');
    }

    public function destroy(string $id)
    {
        self::$destroy= Appointment::find($id);
        self::$destroy->delete();
        return back();
    }
}
