@extends('master')

@section('title')
    Doctors
@endsection

@section('content')
    <div class="container mt-4">
        <h1>Doctor List</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('doctors.create')}}" class="btn btn-success">Add New Doctor</a>

        <table class="table mt-3">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Phone</th>
                <th>Fee</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>

            @foreach($doctors as $doctor)
            <tr>
            <td>{{ $doctor->id }}</td>
            <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->department->name }}</td>
            <td>{{ $doctor->phone }}</td>
            <td>${{ $doctor->fee }}</td>
            <td>
            <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
            </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
