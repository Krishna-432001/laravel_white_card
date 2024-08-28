@extends('frontend.layout.app')

@section('title')
    View White Card
@endsection

@section('content')
<div class="container mt-4">
    <h2>View White Card Details</h2>

    <!-- Search Form -->
    <form method="GET" action="{{ route('white_card.view') }}" class="mb-4">
        <div class="form-group">
            <label for="search">Search by White Card No or ID:</label>
            <input type="text" class="form-control" id="search" name="search" value="{{ request('search') }}" placeholder="Enter White Card No or ID">
        </div>
        <button type="submit" class="btn btn-primary mt-2">Search</button>
    </form>

    <!-- White Card Details List -->
    @if(isset($whiteCard))
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">White Card Details</h5>
            <p><strong>ID:</strong> {{ $whiteCard->id }}</p>
            <p><strong>White Card No:</strong> {{ $whiteCard->white_card_no }}</p>
            <p><strong>Name:</strong> {{ $whiteCard->name }}</p>
            <p><strong>PIN:</strong> {{ $whiteCard->pin }}</p>
            <p><strong>Father's Name:</strong> {{ $whiteCard->father_name }}</p>
            <p><strong>Address:</strong> {{ $whiteCard->address1 }}</p>
            <p><strong>Age:</strong> {{ $whiteCard->age }}</p>
            <p><strong>Date of Birth (DOB):</strong> {{ $whiteCard->dob }}</p>
            <p><strong>Mobile:</strong> {{ $whiteCard->mobile }}</p>

            <!-- Action Links -->
            <a href="{{ route('white_card.upload_photo', $whiteCard->id) }}" class="btn btn-primary">Upload Photo</a>
            <a href="{{ route('white_card.generate_qr', $whiteCard->id) }}" class="btn btn-secondary">Generate QR Code</a>
            <a href="{{ route('white_card.update', $whiteCard->id) }}" class="btn btn-warning">Update Details</a>
        </div>
    </div>
    @elseif(request('search'))
    <p>No white card details found for "{{ request('search') }}".</p>
    @endif
</div>
@endsection
