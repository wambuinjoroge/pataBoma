@extends('layouts.app')

@section('content')

@push('styles')
    <link href="{{ asset('css/custom1.css') }}" rel="stylesheet">
@endpush

<div class="row col-md-12 col-lg-12 col-xs-12 col-sm-12" id="background">

    <img src="assets/images/image.jpg" alt="The house to live!" class="image">
    <h1 id="header">Pata Home</h1>

    <h3 id="subheader">Providing you with a home for life</h3>

</div>
    
@stop
