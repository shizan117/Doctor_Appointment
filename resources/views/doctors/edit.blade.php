@extends('master')

@section('title')
    Edit Doctor
@endsection

@section('content')
    <div class="container mt-4">
        <h1>Edit Doctor</h1>

        <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="department_id" class="form-label">Department:</label>
                <select name="department_id" class="form-control" required>
                    <option value="" selected>Select Department</option>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}" {{ $doctor->department_id == $department->id ? 'selected' : '' }}>
                            {{ $department->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $doctor->name }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" class="form-control" value="{{ $doctor->phone }}" required>
            </div>
            <div class="form-group">
                <label for="fee">Fee:</label>
                <input type="text" name="fee" class="form-control" value="{{ $doctor->fee }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
