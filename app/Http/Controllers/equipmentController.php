<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\equipment;
use Illuminate\Http\File;

class equipmentController extends Controller
{

        public function __construct()
    {
        $this->middleware('checkUser');
    }
        public function index(){
        $itemsCount= equipment::all()->count();
        $items= equipment::all();
        return view('manage.equipment',compact('items','itemsCount'));
        }

          //upload
            public function store(Request $request)
    {
       $items= new equipment;
            if($request->hasFile('img')){
            $data = $request->file('img');
            $doc = $request->file('doc');
            if($doc == null){
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $imgname = $data->getClientOriginalName();
            $request->file('img')->move('equipmentProduct-img',$imgname);
            $items->imgPath = "/equipmentProduct-img/".$imgname;
            $items->docPath = null;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('equipment-upload');
            }
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $docname = $doc->getClientOriginalName();
            $imgname = $data->getClientOriginalName();
            $request->file('doc')->move('equipmentProduct-document',$docname);
            $request->file('img')->move('equipmentProduct-img',$imgname);
            $items->imgPath = "/equipmentProduct-img/".$imgname;
             $items->docPath = "/equipmentProduct-img/".$docname;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('equipment-upload');
        }else{
            return  redirect('equipment-upload');
        }
    }

    //delete
            public function delete(Request $request)
        {
        $items= new equipment;
        $id =  $request->input('productId');  
        $delete = equipment::where('productId',$id);
        $delete->delete();
        Storage::delete('file.jpg');
        return  redirect('equipment-upload');
        }

}
