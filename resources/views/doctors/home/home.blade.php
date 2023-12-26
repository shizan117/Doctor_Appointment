@extends('master')

@section('title')
    Home
@endsection

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Appointment List</h1>
        <!-- Search form -->
{{--        <form action="{{ route('appointments.index') }}" method="GET" class="mb-4">--}}
{{--            @csrf--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-2">--}}
{{--                    <input type="text" class="form-control" name="appointment_no" placeholder="Appointment No"--}}
{{--                           value="{{ request('appointment_no') }}">--}}
{{--                </div>--}}
{{--                <div class="col-md-2">--}}
{{--                    <input type="text" class="form-control" name="appointment_date" placeholder="Appointment Date"--}}
{{--                           value="{{ request('appointment_date') }}">--}}
{{--                </div>--}}
{{--                <div class="col-md-2">--}}
{{--                    <input type="text" class="form-control" name="doctor" placeholder="Doctor" value="{{ request('doctor') }}">--}}
{{--                </div>--}}
{{--                <div class="col-md-2">--}}
{{--                    <input type="text" class="form-control" name="patient_name" placeholder="Patient Name"--}}
{{--                           value="{{ request('patient_name') }}">--}}
{{--                </div>--}}
{{--                <div class="col-md-2">--}}
{{--                    <input type="text" class="form-control" name="patient_phone" placeholder="Patient Phone"--}}
{{--                           value="{{ request('patient_phone') }}">--}}
{{--                </div>--}}
{{--                <div class="col-md-2">--}}
{{--                    <button type="submit" class="btn btn-primary">Search</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </form>--}}

        <!-- Appointment table -->
        <table class="table">
            <thead>
            <tr>
                <th>Appointment No</th>
                <th>Appointment Date</th>
                <th>Doctor</th>
                <th>Patient Name</th>
                <th>Patient Phone</th>
            </tr>
            </thead>
            <tbody>
            {{-- Uncomment the following lines when you have actual data --}}
            {{--@foreach ($appointments as $appointment)--}}
            {{--<tr>--}}
            {{--<td>{{ $appointment->appointment_no }}</td>--}}
            {{--<td>{{ $appointment->appointment_date }}</td>--}}
            {{--<td>{{ $appointment->doctor->name }}</td>--}}
            {{--<td>{{ $appointment->patient_name }}</td>--}}
            {{--<td>{{ $appointment->patient_phone }}</td>--}}
            {{--</tr>--}}
            {{--@endforeach--}}
            </tbody>
        </table>

        <!-- Pagination links -->
        {{-- Uncomment the following line when you have actual data --}}
        {{--{{ $appointments->links() }}--}}
    </div>
@endsection
