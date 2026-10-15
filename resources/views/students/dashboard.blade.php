
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="mb-4">Student Management Dashboard</h1>

    <div class="row g-4">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title text-secondary">Total Students</h5>
                    <p class="display-4 fw-bold text-primary">
                        {{ $totalStudents }}
                    </p>
                    <a href="{{ route('students.index') }}"
                       class="btn btn-primary">
                        View Students
                    </a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">Student Registration</h5>
                    <p>Add new student records to the database.</p>
                    <a href="{{ route('students.create') }}"
                       class="btn btn-success">
                        Add Student
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
