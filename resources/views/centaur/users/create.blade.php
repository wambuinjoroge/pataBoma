{{--@extends('layouts.app')--}}

{{--@section('title', 'Create New User')--}}

{{--@section('content')--}}


    {{--create form--}}

        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    <title>{{ config('app.name', 'PataBoma') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="col-md-4"></div>
    <div class="container col-md-4">

        <h2>Create User</h2>
        <form method="post" action="{{url('create/user')}}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" name="first_name"  placeholder="first_name" value="{{ old('first_name') }}">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="last_name" value="{{ old('last_name') }}">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email"  class="form-control" name="email" placeholder="email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="password" value="{{ old('password') }}">
            </div>
            {{--write code that persuades user to enter password a second time--}}
            <div class="form-group">
                {{--<label>Submit</label>--}}
                <input type="submit" value="submit" placeholder="submit">
            </div>



        </form>
    </div>
</body>
    {{--@stop--}}