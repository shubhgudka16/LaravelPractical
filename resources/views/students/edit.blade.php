
@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Edit Student</h1>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">
        Back to Students
    </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body p-4">
        <form action="{{ route('students.update', $student) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Student Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name', $student->name) }}"
                    required
                >
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email', $student->email) }}"
                    required
                >
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Update Student
            </button>

            <a href="{{ route('students.index') }}" class="btn btn-outline-secondary">
                Cancel
            </a>
        </form>
    </div>
</div>
@endsection
