@extends('layouts.app')
@section('content')

<form method="post" action="{{url('create/house')}}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label>House Number</label>
        <input type="text" class="form-control" name="house_number"  placeholder="house number" value="{{ old('house-number') }}">
    </div>

    <div class="form-group">
        {{--<label>Submit</label>--}}
        <input type="submit" value="submit" placeholder="submit">
    </div>

</form>

@stop