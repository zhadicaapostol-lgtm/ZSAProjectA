@extends('layout.format')

@section('title', 'Admin Dashboard')

@section('content')
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
