@extends('layouts.app')
@section('content')

<div class="container">
<form method="post" action="{{url('create/house')}}">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
        <label>House Number</label>
        <input type="text" class="form-control" name="house_number"  placeholder="house number" value="{{ old('house-number') }}">
    </div>

    <div class="form-group">
        {{--<label>Submit</label>--}}
        <button type="submit">Submit</button>
    </div>

</form>
</div>
@stop