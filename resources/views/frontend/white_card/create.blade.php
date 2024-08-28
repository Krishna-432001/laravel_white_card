@extends('frontend.layout.app')

@section('title')
    Create White Card
@endsection

@section('content')
<div class="container mt-4">
    <h2>Create White Card</h2>
    <form action="{{ route('whitecard.store') }}" method="POST">
        @csrf
        
        <div class="form-group mb-3">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="form-group mb-3">
            <label for="father_name">Father's Name:</label>
            <input type="text" class="form-control" id="father_name" name="father_name" required>
        </div>

        <div class="form-group mb-3">
            <label for="door_no_street">Door No/Street:</label>
            <input type="text" class="form-control" id="door_no_street" name="door_no_street" required>
        </div>

        <div class="form-group mb-3">
            <label for="address">Address:</label>
            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>

        <div class="form-group mb-3">
            <label for="age">Age:</label>
            <input type="number" class="form-control" id="age" name="age" required>
        </div>

        <div class="form-group mb-3">
            <label for="dob">Date of Birth:</label>
            <input type="date" class="form-control" id="dob" name="dob" required>
        </div>

        <div class="form-group mb-3">
            <label for="mobile">Mobile Number:</label>
            <input type="text" class="form-control" id="mobile" name="mobile" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
