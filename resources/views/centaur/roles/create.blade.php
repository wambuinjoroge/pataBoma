@extends('layouts.app')

@section('title', 'Create New Role')

@section('content')

<div class="col-md-4"></div>
<div class="container col-md-4">

    <h2>Create New Role</h2>
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

@stop