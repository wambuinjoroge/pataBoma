@extends('layouts.app')

@section('title', ' New Role')

@section('content')

    {{--table--}}
    <div class="container">
        {{--<div class="pull-right"><a href={{ url("create/role") }}><button>Create Role</button></a></div>--}}
        <table class="table ">
            <thead>
            <tr>
                <th>Slug</th>
                <th>Name</th>
                <th>Permissions<th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)

                <tr>
                    <td>{{ $role->slug }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->permissions }}</td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

@stop
