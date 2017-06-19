@extends('layouts.master') @section('title','Products') @section('header')@endsection @section('content')
<div class="slide">
    <div class="row" style="margin: 40px">
        @foreach($items as $item)
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail" style="text-align: center">
                <img src="{{$item->imgPath}}" style="width: 150px;height:150px ">
                <div class="caption">
                    <h5>Product : {{$item->productName}}</h5>
                    <p>Code : {{$item->productCode}}</p>
                    <p>{{$item->productDes}}</p>
                    <a href="{{$item->docPath}}"><button class="btn btn-default">More info</button></a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <center>
        {{$items->links()}}
    </center>
</div>
        <script>
        $(document).ready(function() {
            $("#product").css("background-color", "#A0D468");
        });
                $(document).ready(function() {
            $("#main").css("background-color", "#A0D468");
        });
    </script>
@endsection @section('footer')