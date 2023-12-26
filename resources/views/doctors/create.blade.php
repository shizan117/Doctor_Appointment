@extends('master')

@section('title')
    Add Doctor
@endsection

@section('content')
    <div class="container mt-4">
        <h1>Create New Doctor</h1>

        <form action="{{route('doctors.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="department_id" class="form-label">Department:</label>
                <select name="department_id" class="form-control" required>
                    <option value="" selected>Select Department</option>
                    @foreach($departments as $department)
                        <option value="{{ $department->id }}" {{ old('department_id') == $department->id ? 'selected' : '' }}>
                            {{ $department->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fee">Fee:</label>
                <input type="text" name="fee" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
@endsection
