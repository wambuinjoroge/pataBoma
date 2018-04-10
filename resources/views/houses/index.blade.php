@extends('layouts.app')

@section('title', ' New House')

@section('content')

    {{--table--}}
    {{--<div class="container">--}}
        {{--<table class="table">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>House Number</th>--}}
            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            {{--@foreach($houses as $house)--}}

                {{--<tr>--}}
                    {{--<td>{{ $house->house_number }}</td>--}}
                {{--</tr>--}}

            {{--@endforeach--}}
            {{--</tbody>--}}
        {{--</table>--}}
    {{--</div>--}}
<div class="col-md-12">
    <div class="col-md-4" id="houseOne">
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
    <div class="col-md-4" id="houseTwo">
        <a target="_blank" href="assets/images/house2.jpeg">
            <img src="assets/images/house2.jpeg">
        </a>
        <div class="desc">House 2

        </div>
        <div>
            <button><a href="#">View More</a></button>
        </div>
    </div>
    <div class="col-md-4" id="houseThree">
        <a target="_blank" href="#">
            <img src="assets/images/house4.jpeg">
        </a>
        <div class="desc">House 3
        </div>
        <div>
            <button><a href="#">View More</a></button>
        </div>
    </div>
</div>

<script type="text/javascript">
    {{--what are we doing here, create an ajax call that returns the clicked house--}}
    function showHouse(){
        var xhr = new XMLHttpRequest();
        xhr.open('GET','{{url('/houses')}}',true);
        xhr.send();
    }

    var div = document.getElementById('houseThree');
    div.addEventListener('click',showHouse);

    // var echo = 2;
    // console.log(echo);


</script>
@stop
