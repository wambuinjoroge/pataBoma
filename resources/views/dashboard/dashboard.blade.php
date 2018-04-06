@extends('layouts.app')

@section('content')


<!-- head section -->

<h2>Get your dream home now!</h2>
<br>

<!-- body -->
<div class="col-md-12">
    <div class="col-md-4">
        <a target="_blank" href="assets/images/house2.jpeg">
            <img src="assets/images/house.jpeg">
        </a>
        <br>
        <div class="desc">
        House 1
            <div>
                <button><a href="#">View More</a></button>
            </div>
        </div>
    </div> 
    <div class="col-md-4">
        <a target="_blank" href="assets/images/house2.jpeg">
            <img src="assets/images/house2.jpeg">
        </a>
        <div class="desc">House 2

        </div>
         <div>
             <button><a href="#">View More</a></button>
        </div>
    </div> 
    <div class="col-md-4">
        <a target="_blank" href="assets/images/house2.jpeg">
            <img src="assets/images/house4.jpeg">
        </a>
        <div class="desc">House 3
        </div>
         <div>
             <button><a href="#">View More</a></button>
        </div>
</div>
@stop
