@extends('master')

@section('title', 'Create Appointment')

@section('content')
    <div class="container mt-4">
        <form action="{{ route('appointments.store') }}" method="POST">
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
                <label for="doctor">Select Doctor:</label>
                <select name="doctor" id="doctor" class="form-control" required>
                    <option value="" selected>Select Department First</option>
                    @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}" data-fee="{{ $doctor->fee }}">{{ $doctor->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Fee -->
            <div class="form-group">
                <label for="fee">Fee:</label>
                <input type="text" name="fee" id="fee" class="form-control" readonly>
            </div>

            <!-- Add Button -->
            <button type="submit" class="btn btn-success">Add</button>
            <!-- Doctors Table -->
            <h3>Doctors in the Selected Department:</h3>
            <table class="table mt-3">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>App.Date</th>
                    <th>Doctor</th>
                    <th>Fee</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($doctors as $doctor)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $doctor->appointment_date }}</td>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->fee }}</td>

                        <!-- Delete Button -->
                        <td>
                            <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>



            <!-- Patient Name and Phone in the same row -->
            <div class="form-group row">
                <h5>Patient Information</h5>
                <label for="patient_name" class="col-md-2 col-form-label">Patient Name:</label>
                <div class="col-md-4">
                    <input type="text" name="patient_name" class="form-control" placeholder="Enter patient name" required>
                </div>

                <label for="patient_phone" class="col-md-2 col-form-label">Patient Phone:</label>
                <div class="col-md-4">
                    <input type="text" name="patient_phone" class="form-control" placeholder="Enter patient phone" required>
                </div>
            </div>



            <!-- Total Payment and Paid Amount in the same row -->
            <div class="form-group row">
                <h5>Payment</h5>
                <label for="total_payment" class="col-md-2 col-form-label">Payment:</label>
                <div class="col-md-4">
                    <input type="text" name="total_payment" class="form-control" value="" readonly>
                </div>

                <!-- Paid Amount -->
                <label for="paid_amount" class="col-md-2 col-form-label">Paid Amount:</label>
                <div class="col-md-4">
                    <input type="number" name="paid_amount" class="form-control" required>
                </div>
            </div>


            <!-- Display Validation Errors -->
            @if($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif

        <!-- Submit Button for Patient Information -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
