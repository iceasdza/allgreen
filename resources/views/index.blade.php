@extends('layouts.master') @section('title','I N D E X') @section('header')@endsection @section('slide')
<div class="">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner slider-bg" style="width: 100%;height: 60rem;">
            <!--
            <div class="item active">
                <div class="row">
                    <div class="col-md-6">
                        <h1 style="position: absolute;right: 50px;top:200px;color: green;font-weight:bold" class="animated bounce">SECURITY SOLUTION SYSTEM</h1>
                        <h1 style="position: absolute;right: 50px;top:250px;color: green;font-weight:bold" class="animated fadeInLeftBig">MAKE MORE GREEN</h1>
                    </div>
                    <div class="col-md-6">
                        <img src="http://economists-pick-research.hktdc.com/resources/MI_Portal/Article/imn/2012/08/370239/1344329274392_12-8-2r1-1_370239.jpg" alt="" style="width:350px;position:absolute;right:250px;top:200px" class="animated fadeInRightBig">
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="row" style="width: 100%;height: 60rem">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <img src="http://www.amatterofsecurity.com/wp-content/uploads/2015/02/analoguecctv.jpg" alt="" style="width:45%;height: 50%">
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="row" style="width: 100%;height: 60rem">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <img src="http://www.amatterofsecurity.com/wp-content/uploads/2015/02/analoguecctv.jpg" alt="" style="width:45%;height: 50%">
                    </div>
                </div>
            </div>-->

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@endsection @section('content')
<!--PROFILE-->
<div class="container-fluid text-center">
    <br>
    <img class="slideanim" src="img/allgreenlogo.png" width="100px">
    <p style="color: green"><strong>OUR</strong> COMPANY</p><br>

    <h4 class="blackfont"><strong style="color: green">ALL GREEN TECHNOLOGY CO., LTD.</strong>บริษัทมุ่งเน้นการจัดจำหน่ายและให้บริการด้านการขายแบบครบวงจรด้วยสินค้า คุณภาพสูง โดยทีมงานวิศวกรที่พรั่งพร้อมด้วยประสบการณ์ความรู้และ ความสามารถ เพื่อให้บริการลูกค้า โดยเราได้คัดสรรผลิตภัณฑ์ที่มีคุณภาพ
        เหมาะสมกับราคาและความต้องการของลูกค้าในทุกกลุ่มตลาด อีกทั้ง ผลิตภัณฑ์ยังได้รับมาตรฐาน เป็นที่ยอมรับ เราพร้อมให้ข้อมูลและสนับสนุนงาน ประมูลเมื่อท่านใช้ผลิตภัณฑ์ที่เราจัดจำหน่ายตลอดเวลา</h4>

</div>
<hr>
<!--REFFERENCE-->
<div class="container-fluid">
    <h1 class="slideanim">REFFERENCE</h1>

</div>
<hr>
<!--SERVICE-->
<div class="container-fluid">
    <h1 class="slideanim">SERVICE</h1>

</div>
<hr>
        <script>
        $(document).ready(function() {
            $("#index").css("background-color", "#A0D468");

        });
    </script>
     @endsection @section('footer')