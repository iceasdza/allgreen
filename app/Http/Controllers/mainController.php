<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\main;
use Illuminate\Http\File;

class mainController extends Controller
{
        public function __construct()
    {
        $this->middleware('checkUser');
    }
       public function index(){
        $itemsCount= main::all()->count();
        $items= main::all();
        return view('manage.main',compact('items','itemsCount'));
        }

          //upload
            public function store(Request $request)
    {
       $items= new main;
            if($request->hasFile('img')){
            $data = $request->file('img');
            $doc = $request->file('doc');
            if($doc == null){
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $imgname = $data->getClientOriginalName();
            $request->file('img')->move('mainProduct-img',$imgname);
            $items->imgPath = "/mainProduct-img/".$imgname;
            $items->docPath = null;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('main-upload');
            }
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $docname = $doc->getClientOriginalName();
            $imgname = $data->getClientOriginalName();
            $request->file('doc')->move('mainProduct-document',$docname);
            $request->file('img')->move('mainProduct-img',$imgname);
            $items->imgPath = "/mainProduct-img/".$imgname;
             $items->docPath = "/mainProduct-img/".$docname;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('main-upload');
        }else{
            return  redirect('main-upload');
        }
    }

    //delete
            public function delete(Request $request)
        {
        $items= new main;
        $id =  $request->input('productId');  
        $delete = main::where('productId',$id);
        $delete->delete();
        Storage::delete('file.jpg');
        return  redirect('main-upload');
        }
}
