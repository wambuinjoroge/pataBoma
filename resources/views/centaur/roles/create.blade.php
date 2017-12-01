@extends('layouts.app')

@section('title', 'Create New User')

@section('content')


{{--create form--}}

        {{--<!DOCTYPE html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'PataBoma') }}</title>--}}

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
<div class="col-md-4"></div>
<div class="container col-md-4">

    <h2>Create Role</h2>
    <form method="post" action="{{url('create/role')}}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>Slug</label>
            <input type="text" class="form-control" name="slug"  placeholder="slug" value="{{ old('slug') }}">
        </div>
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label>Permissions</label>
            <input type="text"  class="form-control" name="permissions" placeholder="permissions" value="{{ old('permissions') }}">
        </div>
        {{--write code that persuades user to enter password a second time--}}
        <div class="form-group">
            {{--<label>Submit</label>--}}
            <input type="submit" value="submit" placeholder="submit">
        </div>



    </form>
</div>
{{--</body>--}}
@stop