@extends('layouts.app')

@section('content')


<div class="container">
    <!-- head section -->

    <a href="{{ url('create/house') }}">
        <button class="btn btn-info btn-lg pull-right ">
        Create House
    </button>
    </a>
    <br>

    <!-- body -->
    <div class="col-md-12">
        <div class="col-md-1"></div>
        <div class="col-md-2" id="houseOne">
            <a target="_blank" href="assets/images/house2.jpeg">
                <img src="assets/images/house2.jpeg">
            </a>
            <br><br>
            <div class="desc">
                {{--<p><b>House 1</b></p>--}}
                <div>
                    <a href="#">
                        <button class="btn btn-info btn-lg">View More </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-2" id="houseTwo">
            <a target="_blank" href="assets/images/house2.jpeg">
                <img src="assets/images/house2.jpeg">
            </a>
            <br><br>
            <div class="desc">
                {{--<p><b>House 2</b></p>--}}
            </div>
            <div>
                <a href="#">
                    <button class="btn btn-info btn-lg">View More </button>
                </a>
            </div>
        </div>
        <div class="col-md-1"></div>

        <div class="col-md-2" id="houseThree">
            <a target="_blank" href="assets/images/house2.jpeg">
                <img src="assets/images/house2.jpeg">
            </a>
            <br><br>
            <div class="desc">
                {{--<p><b>House 3</b></p>--}}
            </div>
            <div>
                <a href="#">
                    <button class="btn btn-info btn-lg">View More </button>
                </a>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    </script>
@stop
