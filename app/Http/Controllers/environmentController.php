<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\environment;
use Illuminate\Http\File;

class environmentController extends Controller
{

        public function __construct()
    {
        $this->middleware('checkUser');
    }
        public function index(){
        $itemsCount= environment::all()->count();
        $items= environment::all();
        return view('manage.environment',compact('items','itemsCount'));
        }

          //upload
            public function store(Request $request)
    {
       $items= new environment;
            if($request->hasFile('img')){
            $data = $request->file('img');
            $doc = $request->file('doc');
            if($doc == null){
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $imgname = $data->getClientOriginalName();
            $request->file('img')->move('environmentProduct-img',$imgname);
            $items->imgPath = "/environmentProduct-img/".$imgname;
            $items->docPath = null;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('environment-upload');
            }
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $docname = $doc->getClientOriginalName();
            $imgname = $data->getClientOriginalName();
            $request->file('doc')->move('environmentProduct-document',$docname);
            $request->file('img')->move('environmentProduct-img',$imgname);
            $items->imgPath = "/environmentProduct-img/".$imgname;
             $items->docPath = "/environmentProduct-img/".$docname;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('environment-upload');
        }else{
            return  redirect('environment-upload');
        }
    }

    //delete
            public function delete(Request $request)
        {
        $items= new environment;
        $id =  $request->input('productId');  
        $delete = environment::where('productId',$id);
        $delete->delete();
        Storage::delete('file.jpg');
        return  redirect('environment-upload');
        }

}
