

@extends('master')

@section('title', 'Appointment List')

@section('content')
    <div class="container mt-4">
        <h1>Appointment List</h1>

        <!-- Search Form -->
        <form action="{{ route('home') }}" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ $search }}">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>

        <!-- Appointment Table -->
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
            @forelse($appointments as $appointment)
                <tr>
                    <td>{{ $appointment->appointment_no }}</td>
                    <td>{{ $appointment->appointment_date }}</td>
                    <td>{{ $appointment->doctor->name }}</td>
                    <td>{{ $appointment->patient_name }}</td>
                    <td>{{ $appointment->patient_phone }}</td>
                    <!-- Add other columns as needed -->
                </tr>
            @empty
                <tr>
                    <td colspan="5">No appointments found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        <!-- Pagination Links -->
        {{ $appointments->links() }}
    </div>
@endsection
