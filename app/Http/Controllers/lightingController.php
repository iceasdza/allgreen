<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\lighting;
use Illuminate\Http\File;

class lightingController extends Controller
{

        public function __construct()
    {
        $this->middleware('checkUser');
    }
     public function index(){
        $itemsCount= lighting::all()->count();
        $items= lighting::all();
        return view('manage.lighting',compact('items','itemsCount'));
        }

          //upload
            public function store(Request $request)
    {
       $items= new lighting;
            if($request->hasFile('img')){
            $data = $request->file('img');
            $doc = $request->file('doc');
            if($doc == null){
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $imgname = $data->getClientOriginalName();
            $request->file('img')->move('lightingProduct-img',$imgname);
            $items->imgPath = "/lightingProduct-img/".$imgname;
            $items->docPath = null;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('lighting-upload');
            }
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $docname = $doc->getClientOriginalName();
            $imgname = $data->getClientOriginalName();
            $request->file('doc')->move('lightingProduct-document',$docname);
            $request->file('img')->move('lightingProduct-img',$imgname);
            $items->imgPath = "/lightingProduct-img/".$imgname;
             $items->docPath = "/lightingProduct-img/".$docname;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('lighting-upload');
        }else{
            return  redirect('lighting-upload');
        }
    }

    //delete
            public function delete(Request $request)
        {
        $items= new lighting;
        $id =  $request->input('productId');  
        $delete = lighting::where('productId',$id);
        $delete->delete();
        Storage::delete('file.jpg');
        return  redirect('lighting-upload');
        }
}
