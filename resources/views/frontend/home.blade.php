@extends('frontend.layout.app')

@section('title')

    @guest

    Login

    @else

    {{ Auth::user()->name }}

    @endguest


@endsection

@section('content')

home page 

@guest

<!-- Officer and Admin Login Options -->
<input type="radio" name="login_type" value="officer"> Officer login

<input type="radio" name="login_type" value="admin"> Admin login

<div id="result"></div>

<!-- Officer Login Form -->
<form action="{{ route('officer.login') }}" method="post" name="officer_login_form">

    @csrf

    <input type="email" name="email">

    <input type="password" name="password">

    <select name="department">

    <option value="any">select any department</option>

        @foreach($departments as $row)
        <option value="{{ $row->name }}">{{$row->name}}</option>
        @endforeach

    </select>

    <input type="submit" value="officer login">

</form>

<!-- Admin Login Form -->
<form action="{{ route('admin.login') }}" method="post" name="admin_login_form">

    @csrf

    <input type="email" name="email">

    <input type="password" name="password">

    <input type="submit" value="admin login">

</form>

@else

<a href="#">Create Officer</a>

<a href="#">Create Officer</a>

@endguest

@endsection