@extends('layouts.app')

@section('title', ' New House')

@section('content')

    {{--table--}}
    <div class="container">
        <table class="table ">
            <thead>
            <tr>
                <th>House Number</th>
            </tr>
            </thead>
            <tbody>
            @foreach($houses as $house)

                <tr>
                    <td>{{ $house->house_number }}</td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

@stop
