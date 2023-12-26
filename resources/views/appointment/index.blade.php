@extends('master')

@section('title', 'Create Appointment')

@section('content')
    <div class="container mt-4">


        <form id="appointmentForm" action="{{ route('appointments.store') }}" method="POST">
        @csrf

        <!-- Appointment Date -->
            <div class="form-group">
                <label for="appointment_date">Appointment Date:</label>
                <input type="date" name="appointment_date" class="form-control" required>
            </div>

            <!-- Department -->
            <div class="form-group">
                <label for="department">Department:</label>
                <select id="department" name="department" class="form-control" required>
                    <option value="" selected>Select Department</option>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Doctor -->
            <div class="form-group">
                <label for="doctor">Select Doctor</label>
                <select id="doctor" name="doctor" class="form-control" required>
                    <!-- Doctors will be dynamically populated using JavaScript -->
                </select>
            </div>
            <!-- Fee -->
            <div class="form-group">
                <label for="fee">Fee:</label>
                <input type="text" name="fee" id="fee" class="form-control" readonly required>
            </div>
            <!-- Other Appointment Fields -->

            <!-- Add Button -->
            <button type="button" class="btn btn-primary" id="addDoctor">Add</button>

            <!-- Doctors Table -->
            <table class="table mt-3">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>App. Date</th>
                    <th>Doctor</th>
                    <th>Fee</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <!-- Doctor entries will be dynamically added here -->
                </tbody>
            </table>

            <!-- Patient Name -->
            <!-- Patient Phone -->
            <!-- Paid Amount -->

            <!-- Submit Button -->
            <button type="submit" class="btn btn-success">Submit Appointment</button>
        </form>
    </div>


@endsection
