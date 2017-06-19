<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\safety;
use Illuminate\Http\File;

class safe1controller extends Controller
{
    public function __construct()
    {
        $this->middleware('checkUser');
    }

   public function index()
    {   
        $itemsCount= safety::all()->count();
        $items= safety::all();
        return view('uploadProduct',compact('items','itemsCount'));
    }

    //upload
            public function store(Request $request)
    {
        $productList = new safety;
            if($request->hasFile('img')){
            $data = $request->file('img');
            $doc = $request->file('doc');
            if($doc == null){
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $imgname = $data->getClientOriginalName();
            $request->file('img')->move('safe1Product',$imgname);
            $productList->imgPath = "/safe1Product/".$imgname;
             $productList->docPath = null;
            $productList->productName = $prodname;
            $productList->productCode = $prodCode;
            $productList->productDes = $proDesc;
            $productList->save();
            return  redirect('safety-upload');
            }
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $docname = $doc->getClientOriginalName();
            $imgname = $data->getClientOriginalName();
            $request->file('doc')->move('safe1Product-document',$docname);
            $request->file('img')->move('safe1Product',$imgname);
            $productList->imgPath = "/safe1Product/".$imgname;
            $productList->docPath = "/safe1Product-document/".$docname;
            $productList->productName = $prodname;
            $productList->productCode = $prodCode;
            $productList->productDes = $proDesc;
            $productList->save();
            return  redirect('safety-upload');
        }else{
            return  redirect('safety-upload');
        }
    }

    //delete
            public function delete(Request $request)
        {
                    $safe1_id = new safety;
        $id =  $request->input('productId');  
        $delete = safety::where('productId',$id);
        $delete->delete();
        Storage::delete('file.jpg');
        return  redirect('safety-upload');
        }

}
