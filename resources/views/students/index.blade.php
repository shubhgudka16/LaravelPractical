
@extends('layouts.app')

@section('title', 'Student List')

@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
        <h1 class="mb-0">Student List</h1>
        <a href="{{ route('students.create') }}" class="btn btn-success">
            + Add Student
        </a>
    </div>

    <form action="{{ route('students.index') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control"
                   placeholder="Search by name or email..."
                   value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Search</button>
            <a href="{{ route('students.index') }}" class="btn btn-secondary">
                Reset
            </a>
        </div>
    </form>

    <div class="card shadow-sm border-0">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>
                                <div class="d-flex flex-wrap gap-1">
                                    <a href="{{ route('students.show', $student) }}"
                                       class="btn btn-sm btn-info">View</a>

                                    <a href="{{ route('students.edit', $student) }}"
                                       class="btn btn-sm btn-warning">Edit</a>

                                    <form action="{{ route('students.destroy', $student) }}"
                                          method="POST"
                                          onsubmit="return confirm('Delete this student?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center py-4">
                                No student records found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        {{ $students->links() }}
    </div>
@endsection
