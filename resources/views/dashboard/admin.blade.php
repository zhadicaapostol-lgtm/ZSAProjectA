@extends('layout.format')

@section('title', 'Admin Dashboard')

@section('content')
    <section class="card hero-card">
        <div class="hero-grid">
            <div>
                <p class="eyebrow">Admin Access</p>
                <h1 class="hero-title">Admin Control Center</h1>
                <p class="hero-copy">
                    A central workspace for student, teacher, degree, and account management with a cleaner split-panel layout.
                </p>

                <div class="button-group">
                    <a href="{{ route('student.create') }}" class="button">Add Student</a>
                    <a href="{{ route('teacher.create') }}" class="button button-secondary">Add Teacher</a>
                </div>
            </div>

            <div class="stat-grid">
                <article class="stat-tile">
                    <span>Students</span>
                    <strong>{{ $studentCount }}</strong>
                </article>
                <article class="stat-tile">
                    <span>Teachers</span>
                    <strong>{{ $teacherCount }}</strong>
                </article>
                <article class="stat-tile">
                    <span>Degrees</span>
                    <strong>{{ $degreeCount }}</strong>
                </article>
                <article class="stat-tile">
                    <span>Accounts</span>
                    <strong>{{ $accountCount }}</strong>
                </article>
            </div>
        </div>
    </section>

    <section class="card">
        <div class="page-header">
            <div>
                <h2>Quick Navigation</h2>
                <p>Jump directly to the main management areas.</p>
            </div>
        </div>

        <div class="section-grid">
            <a href="{{ route('student.index') }}" class="button button-secondary">Manage Students</a>
            <a href="{{ route('teacher.index') }}" class="button button-secondary">Manage Teachers</a>
            <a href="{{ route('degree.index') }}" class="button button-secondary">Manage Degrees</a>
            <a href="{{ route('user.profile') }}" class="button button-secondary">View Profile</a>
        </div>
    </section>
@endsection
