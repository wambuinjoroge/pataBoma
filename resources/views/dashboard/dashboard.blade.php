@extends('layouts.app')

@section('content')


<!-- head section -->

<h2>Get your dream home now!</h2>
<br>

<!-- body -->
<div class="col-md-12">
    <div class="col-md-4" id="houseOne">
        <a target="_blank" href="assets/images/house2.jpeg">
            <img src="assets/images/house2.jpeg">
        </a>
        <br><br>
        <div class="desc">
            {{--<p><b>House 1</b></p>--}}
            <div>
                <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">View More</button>
            </div>
            {{--modal--}}
            <div class="modal fade" id="myModal" role="dialog">
               <div class="modal-dialog modal-lg">
                   <div class="modal-content">
                       {{--modal header--}}
                       <div class="modal-header">
                           {{--<button class="btn btn-sm pull-right"><i class="fa fa-close"></i></button>--}}
                          {{--<i class="fa fa-close"></i>--}}
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h3>Features of the house</h3>
                       </div>
                       {{--modal body
                       Should have details about the house clicked--}}
                       <div class="modal-body">
                           <p>Number of bedrooms:2</p>
                           <p>Price Per Month:15000kes</p>
                           </p>
                       </div>
                       {{--modal footer
                       Should a space to leave a feedback,contacts maybe--}}
                       <div class="modal-footer">
                           <p><b>Please leave your contact here below</b></p>
                          <form method="post">
                              <input type="text" name="name" placeholder="Phone Number">
                              <button class="btn btn-info btn-sm" type="submit">Submit</button>
                          </form>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div> 
    <div class="col-md-4" id="houseTwo">
        <a target="_blank" href="assets/images/house2.jpeg">
            <img src="assets/images/house2.jpeg">
        </a>
        <br><br>
        <div class="desc">
            {{--<p><b>House 2</b></p>--}}
        </div>
         <div>
             <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">View More</button>
        </div>
    </div> 
    <div class="col-md-4" id="houseThree">
        <a target="_blank" href="assets/images/house2.jpeg">
            <img src="assets/images/house2.jpeg">
        </a>
        <br><br>
        <div class="desc">
            {{--<p><b>House 3</b></p>--}}
        </div>
         <div>
             <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">View More</button>
        </div>
</div>
</div>
    <script type="text/javascript">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </script>
@stop
