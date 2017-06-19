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


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <div class="row">
        @section('header')
        <div class="col-md-1"></div>
        <div class="col-md-10" class="container" style="height: 60px">


            <nav class="navbar navbar-default navbar-static-top animated fadeInUp">
                <div class="container">
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>

        <span class="icon-bar"></span>                        

      </button>

                        <a class="navbar-brand" href="#myPage"><img src="img/allgreenlogo.png" width="50px;" class="logo"></a>

                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar" style="z-index: 5">

                        <ul class="nav navbar-nav ">

                            <li id="index"><a href="/">HOME</a></li>

                            <li id="profile"><a href="profile">COMPANYPROFILE</a></li>

                            <li class="dropdown">
                                <a id="product" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PRODUCT <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="safety_and_security">Safety & Security Products</a></li>
                                    <li><a href="Public,Conference">Public, Conference Communication System.</a></li>
                                    <li><a href="Offset_printing">Offset printing equipment Products.</a></li>
                                    <li><a href="Lighting_Products">Lighting Products.</a></li>
                                    <li><a href="Electrical_&_Mechanical">Electrical & Mechanical Products.</a></li>
                                    <li><a href="Main_Distrivution_Board">Main Distrivution Board.</a></li>
                                    <li><a href="Electrical_Energy_Saving">Electrical Energy Saving Product.</a></li>
                                    <li><a href="Environments">Environments Products.</a></li>
                                    <li><a href="Air_conditions">Air-cnditions Products</a></li>
                                    <li><a href="Safety_Equipment">Safety Equipment Products.</a></li>

                                </ul>
                            </li>
                            <li id="service"><a href="service">SERVICE</a></li>

                            <li id="contact"><a href="contact">CONTACT</a></li>

                        </ul>

                    </div>

                </div>
            </nav>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div>
        @yield('slide')
    </div>


    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2 col-xs-1">
            <!--startnav-->
            <nav class="navbar navbar-default sidebar" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                    </div>
                    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li id="safe"><a href="safety_and_security">Safety & Security Products<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="public"><a href="Public,Conference">Public, Conference Communication System.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="printing"><a href="Offset_printing">Offset printing equipment Products.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="lighting"><a href="Lighting_Products">Lighting Products.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="electrical"><a href="Electrical_&_Mechanical">Electrical & Mechanical Products.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="main"><a href="Main_Distrivution_Board">Main Distrivution Board.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="energy"><a href="Electrical_Energy_Saving">Electrical Energy Saving Product.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="environment"><a href="Environments">Environments Products.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="air"><a href="Air_conditions">Air-cnditions Products<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
                            <li id="equipment"><a href="Safety_Equipment">Safety Equipment Products.<span style="font-size:16px;" class="pull-right hidden-xs showopacity"></span></a></li>
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
    <div class="row">

        <hr>
        <div class="col-md-1"></div>
        <div class="col-md-10 text-center" style="background-color: #A0D468">

            ©2011 ALLGREEN Technology Co.,Ltd. 49/146 ม.5 ถ.พุทธมณฑลสาย 4 แขวงทวีวัฒนา เขตทวีวัฒณา กรุงเทพฯ 10170 Tel : 02-814-0066 Fax : 02-814-0066 Email : info@allgreenthai.com </p>

            @yield('footer')
        </div>
        <div class="col-md-1"></div>

    </div>


</body>

</html>