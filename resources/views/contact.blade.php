@extends('layouts.master') @section('title','C O N T A C T')
@section('content')

<div id="contact" class="container-fluid slide">

  <h2 class="text-center" style="display: inline;color:green">CONTACT</h2>&nbsp;<h2 style="display: inline" class="text-center glyphicon glyphicon-earphone"></h2> 

  <div class="row">

    <div class="col-sm-5">

      <h4 style="color:green">ALL GREEN TECHNOLOGY CO., LTD.</h4>

      <p><span class="glyphicon glyphicon-map-marker"></span>49/146 Moo 5 Phtthamonthon Sai 4 Rd. Thaveewattana, Thaveewattana Bangkok 10210

</p>

      <p><span class="glyphicon glyphicon-phone"></span>Tel. 02-814-0066 Fax. 02-814-0066</p>

      <p><span class="glyphicon glyphicon-envelope"></span> E-mail : info@allgreenthai.com</p>

    </div>

    <div class="col-sm-7 slideanim">

      <div class="row">

        <div class="col-sm-6 form-group">

          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>

        </div>

        <div class="col-sm-6 form-group">

          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>

        </div>

      </div>

      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>

      <div class="row">

        <div class="col-sm-12 form-group">

          <button class="btn btn-default pull-right" type="submit">Send</button>

        </div>

      </div>

    </div>

  </div>

</div>



<div id="map" style="height:400px;width:100%"></div>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWtF2rkocgTSevitibd6exLUM8-8ylIAA&callback=myMap"></script>

        <script>
        $(document).ready(function() {
            $("#contact").css("background-color", "#A0D468");

        });
    </script>
<!-- Add Google Maps -->

@endsection @section('footer')