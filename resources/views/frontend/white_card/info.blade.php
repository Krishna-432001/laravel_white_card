@extends('frontend.layout.app')

@section('title')
    Info Card
@endsection

@section('content')
<div class="container mt-4">
    <h2>Info Card Details</h2>

    <!-- Department Selector -->
    <form method="GET" action="{{ route('info_card.index') }}" class="mb-4">
        <div class="form-group">
            <label for="department">Select Department:</label>
            <select class="form-control" id="department" name="department" onchange="this.form.submit()">
                <option value="" selected>Select Department</option>
                @foreach($departments as $department)
                    <option value="{{ $department }}" 
                        @if(request('department') == $department) selected @endif>
                        {{ $department }}
                    </option>
                @endforeach
            </select>
        </div>
    </form>

    <!-- Info Card Details -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">White Card Details</h5>
            <p><strong>ID:</strong> {{ $infoCard->id }}</p>
            <p><strong>White Card No:</strong> {{ $infoCard->white_card_no }}</p>
            <p><strong>Type (For Department Card):</strong> {{ $infoCard->type }}</p>
            <p><strong>Name:</strong> {{ $infoCard->name }}</p>
            <p><strong>DL/PAN/Ration/Voter No:</strong> {{ $infoCard->identification_no }}</p>
            <p><strong>Valid Date:</strong> {{ $infoCard->valid_date }}</p>
            <p><strong>Address:</strong> {{ $infoCard->address }}</p>
            <p><strong>Date of Birth (DOB):</strong> {{ $infoCard->dob }}</p>

            <!-- Update Links -->
            <a href="{{ route('info_card.update_it', $infoCard->id) }}" class="btn btn-primary">Update IT</a>
            <a href="{{ route('info_card.update_voting', $infoCard->id) }}" class="btn btn-secondary">Update Voting</a>
            <a href="{{ route('info_card.update_ration', $infoCard->id) }}" class="btn btn-warning">Update Ration</a>
        </div>
    </div>
</div>
@endsection
