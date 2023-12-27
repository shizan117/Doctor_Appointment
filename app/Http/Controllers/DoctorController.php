<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static $destroy;
    public function index()
    {
        return view('doctors.index', [
            'doctors' => Doctor::orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctors.create',[
            'departments'=>Department::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'department_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'fee' => 'required',
        ]);


        Doctor::saveInfo($request);
        return redirect()->route('doctors.index')->with('success', 'Doctor created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('doctors.edit',[
            'doctor'=>Doctor::find($id),
            'departments'=>Department::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request
        $request->validate([
            'department_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'fee' => 'required',
        ]);


        Doctor::saveInfo($request, $id);

        return redirect()->route('doctors.index')->with('success', 'Doctor Updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        self::$destroy= Doctor::find($id);
        self::$destroy->delete();
        return back();
    }
}
