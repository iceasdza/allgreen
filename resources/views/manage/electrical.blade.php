<div class="container text-center" style="color:black;font-size:50px">Electrical & Mechanical Products.</div>
<hr>
@extends('layouts.manger')@section('title','ADMIN') @section('header')@endsection @section('content') 
    <div style="padding: 10px" class="slide">

<div class="container text-center">
<div>
  <!-- Trigger the modal with a button -->
  <h1>NOW WE HAVE <strong style="color:red">{{$itemsCount}}</strong> ITEM(S)</h1>
  <button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">Upload product here!</button>
</div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" action="electrical-upload" style="padding-right:200px;padding-left:200px">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <h4>PRODUCT IMAGE</h4> <input class="form-control" type="file" name="img">
            <h4>DOCUMENT</h4><input class="form-control" type="file" name="doc">
            <h4>PRODUCT NAME</h4> <input type="text" class="form-control" name="prodName" placeholder="Product name" required>
            <h4>PRODUCT CODE</h4> <input type="text" class="form-control" name="prodCode" placeholder="Product code" required>
            <h4>PRODUCT Description</h4><textarea class="form-control" name="prodDesc" style="resize:none"></textarea>
            <br>
            <input class="btn btn-default" type="submit" value="upload file">
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>


        <div class="row" style="margin: 40px">
            @foreach($items as $item)
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail" style="text-align: center">
                    <img src="{{$item->imgPath}}" style="width: 150px;height:150px ">
                    <div class="caption">
                        <h5>Product : {{$item->productName}}</h5>
                        <p>Code : {{$item->productCode}}</p>
                        <textarea class="form-control" style="resize:none" rows="5" disabled> {{$item->productDes}}</textarea><br>
                        <form method="POST" enctype="multipart/form-data" action="electrical-delete">

                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" value="{{$item->productId}}" name="productId">
                            <input type="submit" class="btn btn-danger" value="DELETE">
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
        <script>
        $(document).ready(function() {
            $("#electrical").css("background-color", "#A0D468");

        });
    </script>
    @endsection