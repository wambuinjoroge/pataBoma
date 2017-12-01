@extends('layouts.app')

@section('content')


    {{--<!-- Button trigger modal -->--}}
    {{--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">--}}
        {{--Launch demo modal--}}
    {{--</button>--}}

    {{--<!-- Modal -->--}}
    {{--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">--}}
        {{--<div class="modal-dialog" role="document">--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
                    {{--<h4 class="modal-title" id="myModalLabel">What would you like to do here</h4>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--...--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

{{--2--}}

    {{--<h2>This is the beginning of my new life</h2>--}}
    {{--<button type="button" onclick="document.getElementById('demo').innerHTML = Date()">--}}
        {{--Display date and time--}}
    {{--</button>--}}

    {{--<p id="demo">Goofy</p>--}}
{{--3--}}
    {{--<h2>What Can JavaScript Do?</h2>--}}

    {{--<p id="demo1">JavaScript can change HTML content.</p>--}}

    {{--<button type="button" onclick='document.getElementById("demo1").innerHTML = "Hello JavaScript!"'>Click Me!</button>--}}
  {{----}}
{{--4--}}
    {{--<h2>What Can JavaScript Do?</h2>--}}

    {{--<p>JavaScript can change HTML attributes.</p>--}}

    {{--<p>In this case JavaScript changes the src (source) attribute of an image.</p>--}}

    {{--<button onclick="document.getElementById('myImage').src='pic_bulbon.gif'">Turn on the light</button>--}}

    {{--<img id="myImage" src="pic_bulboff.gif" style="width:100px">--}}

    {{--<button onclick="document.getElementById('myImage').src='pic_bulboff.gif'">Turn off the light</button>--}}
{{--5--}}
    {{--<style>--}}
        {{--img {--}}
            {{--max-width: 100%;--}}
            {{--height: auto;--}}
        {{--}--}}
    {{--</style>--}}
    {{--</head>--}}
    {{--<body>--}}

    {{--<h2>Responsive Images</h2>--}}
    {{--<p>Responsive images will automatically adjust to fit the size of the screen.</p>--}}
    {{--<p>Resize the browser window to see the effect:</p>--}}

    {{--<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9ynho7FP6_C8ja2yCdx1ViiIy-hu7NaiC8JlNkn-ilMhVmxbLgA" alt="Norway" width="1000" height="300">--}}
{{--6--}}



    <body>

    <div class="gallery">
        <a target="_blank" href="fjords.jpg">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSY4TBvIHAuau7Wr30go764sQocmYsDw1ir1suMYqTkKeTaPZADKQ" alt="Fjords" width="300" height="200">
        </a>
        <div class="desc">House 1</div>
    </div>


    {{--<div class="gallery">--}}
        {{--<a target="_blank" href="forest.jpg">--}}
            {{--<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSY4TBvIHAuau7Wr30go764sQocmYsDw1ir1suMYqTkKeTaPZADKQ" alt="Forest" width="300" height="200">--}}
        {{--</a>--}}
        {{--<div class="desc">House 2</div>--}}
    {{--</div>--}}

    {{--<div class="gallery">--}}
        {{--<a target="_blank" href="lights.jpg">--}}
            {{--<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSY4TBvIHAuau7Wr30go764sQocmYsDw1ir1suMYqTkKeTaPZADKQ" alt="Northern Lights" width="300" height="200">--}}
        {{--</a>--}}
        {{--<div class="desc">House 3</div>--}}
    {{--</div>--}}

    {{--<div class="gallery">--}}
        {{--<a target="_blank" href="mountains.jpg">--}}
            {{--<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSY4TBvIHAuau7Wr30go764sQocmYsDw1ir1suMYqTkKeTaPZADKQ" alt="Mountains" width="300" height="200">--}}
        {{--</a>--}}
        {{--<div class="desc">House 4</div>--}}
    {{--</div>--}}

@stop
