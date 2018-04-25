@extends('layouts.app')

@section('title', ' House')

@section('content')
    <div class="col-md-2" id="houseOne">
        <p><b>{{ $house->house_number }}</b></p>
            <img src="{{ $house->image_path }}">

        <br><br>
        <div class="desc">

            <div>
                <a href="">
                    <button class="btn btn-info btn-lg">View More </button>
                </a>
            </div>
        </div>
    </div>


@stop