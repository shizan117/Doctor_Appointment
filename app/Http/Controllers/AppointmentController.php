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
        // Validate the form data
        $validatedData = $request->validate([
            'doctor' => 'required|exists:doctors,id',
            // Add other validation rules as needed
        ]);

        // Fetch the selected doctor and associated fee
        $selectedDoctorId = $request->input('doctor');
        $selectedDoctor = Doctor::find($selectedDoctorId);

        // Set the fee in the request
        $request->merge(['fee' => $selectedDoctor->fee]);

        // Continue with storing the appointment
        // Implement your logic to store the appointment in the database

        // Example:
        // $appointment = new Appointment();
        // $appointment->doctor_id = $selectedDoctorId;
        // $appointment->fee = $selectedDoctor->fee;
        // $appointment->save();

        return redirect()->route('appointment.index')->with('success', 'Appointment created successfully');
    }

    public function destroy(string $id)
    {
        self::$destroy= Appointment::find($id);
        self::$destroy->delete();
        return back();
    }
}
