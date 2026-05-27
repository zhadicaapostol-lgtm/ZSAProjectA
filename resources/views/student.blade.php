@extends('layout.format')

@section('title', 'Students')

@section('content')
    <section class="card">
        <div class="page-header">
            <div>
                <p class="eyebrow">Student Records</p>
                <h2>Student Workspace</h2>
                <p>A cleaner card-based page for browsing and maintaining student records.</p>
            </div>

            <a href="{{ route('student.create') }}" class="button">Add Student</a>
        </div>

        <div class="detail-grid" style="margin-top: 0;">
            <article class="detail-item">
                <span>Total Students</span>
                <strong>{{ $students->total() }}</strong>
            </article>
            <article class="detail-item">
                <span>Current Page</span>
                <strong>{{ $students->currentPage() }}</strong>
            </article>
        </div>
    </section>

    <section class="card">
        <div class="page-header">
            <div>
                <h2>Student Table</h2>
                <p>View, edit, and delete student records from the table below.</p>
            </div>
        </div>

        <p class="table-meta">
            @if ($students->count())
                Showing {{ $students->firstItem() }} to {{ $students->lastItem() }} of {{ $students->total() }} students.
            @else
                No student records have been added yet.
            @endif
        </p>

        <div id="studentMessage"></div>

        <div id="studentsTableRegion">
            @include('partials.students-table', ['students' => $students])
        </div>
    </section>
@endsection
