<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ALL GREEN TEC. | | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="deco.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="googlemap.js"></script>
    <script src="slide.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWtF2rkocgTSevitibd6exLUM8-8ylIAA&callback=myMap"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
         <center>
                    <form method="post" action="logout">
                     {!! csrf_field() !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" value="logout">LOGOUT</button>
</form>
</center>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <!--startnav-->
            <nav class="navbar navbar-default sidebar" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                    </div>
                    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                        <ul class="nav navbar-nav" style="background-color: white">
                            <li id="safe"><a href="safety-upload">Safety & Security Products<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="public"><a href="publics-upload">Public, Conference Communication System.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="printing"><a href="printing-upload">Offset printing equipment Products.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="lighting"><a href="lighting-upload">Lighting Products.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="electrical"><a href="electrical-upload">Electrical & Mechanical Products.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="main"><a href="main-upload">Main Distrivution Board.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="energy"><a href="energy-upload">Electrical Energy Saving Product.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="environment"><a href="environment-upload">Environments Products.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="air"><a href="air-upload">Air-cnditions Products<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="equipment"><a href="equipment-upload">Safety Equipment Products.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!--endnav-->
        </div>
        <div class="col-md-8">
            @yield('content')
        </div>
        <div class="col-md-1">

        </div>

    </div>

</body>

</html>