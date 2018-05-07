@extends('layouts.app')
@section('content')

    <div class="container">
        <form method="post" action="{{url('edit/house/'.$house->id)}}">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label>House Number</label>
                <input type="text" class="form-control" name="house_number"  placeholder="house number" value="{{ $house->house_number}}">
            </div>

            <div class="form-group">
                {{--<label>Submit</label>--}}
                <button type="submit">Update</button>
            </div>

        </form>
    </div>
@stop