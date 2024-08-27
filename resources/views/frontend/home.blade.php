@extends('frontend.layout.app')

@section('title')

Home page

@endsection

@section('content')

home page 

<input type="radio" name="login_type" value="officer"> Officer login

<input type="radio" name="login_type" value="admin"> Admin login

<div id="result"></div>

<form action="#" method="post" name="officer_login_form">

    <input type="email" name="email">

    <input type="password" name="password">

    <select name="department">

    <option value="any">select any department</option>

    @foreach($departments as $row)
    <option value="{{ $row->name }}">{{$row->name}}</option>
    @endforeach
    </select>

</form>

<form action="#" method="post" name="admin_login_form">

<input type="email" name="email">

<input type="password" name="password">

</form>

@endsection