@extends('frontend.layout.app')

@section('title')
    View Officer
@endsection

@section('content')
<div class="container mt-4">
    <h2>Officer Listing</h2>

    <!-- Department Filter -->
    <form method="GET" action="{{ route('officers.index') }}" class="mb-4">
        <div class="form-group">
            <label for="department">Filter by Department:</label>
            <select class="form-control" id="department" name="department" onchange="this.form.submit()">
                <option value="" selected>All Departments</option>
                @foreach($departments as $department)
                    <option value="{{ $department }}" 
                        @if(request('department') == $department) selected @endif>
                        {{ $department }}
                    </option>
                @endforeach
            </select>
        </div>
    </form>

    <!-- Officer List -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Designation</th>
                <th>Department</th>
            </tr>
        </thead>
        <tbody>
            @forelse($officers as $officer)
                <tr>
                    <td>{{ $officer->name }}</td>
                    <td>{{ $officer->email }}</td>
                    <td>{{ $officer->mobile_number }}</td>
                    <td>{{ $officer->designation }}</td>
                    <td>{{ $officer->department }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No officers found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
