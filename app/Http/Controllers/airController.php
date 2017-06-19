<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\air;
use Illuminate\Http\File;

class airController extends Controller
{

        public function __construct()
    {
        $this->middleware('checkUser');
    }
        public function index(){
        $itemsCount= air::all()->count();
        $items= air::all();
        return view('manage.air',compact('items','itemsCount'));
        }

          //upload
            public function store(Request $request)
    {
       $items= new air;
            if($request->hasFile('img')){
            $data = $request->file('img');
            $doc = $request->file('doc');
            if($doc == null){
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $imgname = $data->getClientOriginalName();
            $request->file('img')->move('airProduct-img',$imgname);
            $items->imgPath = "/airProduct-img/".$imgname;
            $items->docPath = null;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('air-upload');
            }
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $docname = $doc->getClientOriginalName();
            $imgname = $data->getClientOriginalName();
            $request->file('doc')->move('airProduct-document',$docname);
            $request->file('img')->move('airProduct-img',$imgname);
            $items->imgPath = "/airProduct-img/".$imgname;
             $items->docPath = "/airProduct-img/".$docname;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('air-upload');
        }else{
            return  redirect('air-upload');
        }
    }

    //delete
            public function delete(Request $request)
        {
        $items= new air;
        $id =  $request->input('productId');  
        $delete = air::where('productId',$id);
        $delete->delete();
        Storage::delete('file.jpg');
        return  redirect('air-upload');
        }

}
