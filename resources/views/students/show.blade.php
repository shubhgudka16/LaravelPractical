
@extends('layouts.app')

@section('title', 'Student Details')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Student Details</h1>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">
        Back to Students
    </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white">
        Student Information
    </div>

    <div class="card-body">
        <p><strong>Student ID:</strong> {{ $student->id }}</p>
        <hr>

        <p><strong>Name:</strong> {{ $student->name }}</p>
        <hr>

        <p><strong>Email:</strong> {{ $student->email }}</p>
        <hr>

        <p><strong>Created At:</strong>
            {{ $student->created_at?->format('d M Y, h:i A') ?? 'N/A' }}
        </p>
        <hr>

        <p><strong>Last Updated:</strong>
            {{ $student->updated_at?->format('d M Y, h:i A') ?? 'N/A' }}
        </p>

        <a href="{{ route('students.edit', $student) }}"
           class="btn btn-warning">
            Edit Student
        </a>
    </div>
</div>
@endsection
