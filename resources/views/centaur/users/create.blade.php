@extends('layouts.app')

@section('title', 'Create New User')

@section('content')


<div class="col-md-3"></div>
<div class="container col-md-6">

    <h2>Create New User</h2>
    <form method="post" action="{{url('create/user')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" class="form-control" name="first_name"  placeholder="first_name" >
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="last_name" >
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email"  class="form-control" name="email" placeholder="email" >
        </div>
        <div class="form-group">
        <label>Roles</label><br>
            @foreach($roles as $role)
                <input type="checkbox" name="{{ $role->slug }}" value="{{ $role->id }}">{{ $role->name }}<br>
            @endforeach
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" placeholder="password" >
        </div>
        {{--write code that persuades user to enter password a second time--}}
      <div>
          <button type="submit">Submit</button>
      </div>
    </form>
</div>
<div class="col-md-3"></div>

@stop