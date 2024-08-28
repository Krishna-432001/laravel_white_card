@extends('frontend.layout.app')

@section('title')
    Card Status
@endsection

@section('content')
<div class="container mt-4">
    <h2>Card Status Details</h2>

    <!-- Department Selector -->
    <form method="GET" action="{{ route('card_status.index') }}" class="mb-4">
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

    <!-- Card Details List -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>White Card No</th>
                <th>ID No</th>
                <th>Year</th>
                <th>Status</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cards as $card)
                <tr>
                    <td>{{ $card->id }}</td>
                    <td>{{ $card->white_card_no }}</td>
                    <td>{{ $card->id_no }}</td>
                    <td>{{ $card->year }}</td>
                    <td>{{ $card->status }}</td>
                    <td>{{ $card->type }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No card details found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
