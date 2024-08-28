@extends('frontend.layout.app')

@section('title')
    Create Officer
@endsection

@section('content')
<div class="container mt-4">
    <h2>Create Officer</h2>
    <form action="{{ route('officers.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group mb-3">
            <label for="mobile_number">Mobile Number:</label>
            <input type="text" class="form-control" id="mobile_number" name="mobile_number" required>
        </div>

        <div class="form-group mb-3">
            <label for="designation">Designation:</label>
            <input type="text" class="form-control" id="designation" name="designation" required>
        </div>

        <div class="form-group mb-3">
            <label for="department">Department:</label>
            <select class="form-control" id="department" name="department" required>
                <option value="" disabled selected>Select Department</option>
                <option value="HR">HR</option>
                <option value="Finance">Finance</option>
                <option value="IT">IT</option>
                <option value="Operations">Operations</option>
                <!-- Add more departments as needed -->
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Register Officer</button>
    </form>
</div>
@endsection
