<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\electrical;
use Illuminate\Http\File;

class electricalController extends Controller
{

        public function __construct()
    {
        $this->middleware('checkUser');
    }
       public function index(){
        $itemsCount= electrical::all()->count();
        $items= electrical::all();
        return view('manage.electrical',compact('items','itemsCount'));
        }

          //upload
            public function store(Request $request)
    {
       $items= new electrical;
            if($request->hasFile('img')){
            $data = $request->file('img');
            $doc = $request->file('doc');
            if($doc == null){
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $imgname = $data->getClientOriginalName();
            $request->file('img')->move('electricalProduct-img',$imgname);
            $items->imgPath = "/electricalProduct-img/".$imgname;
            $items->docPath = null;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('electrical-upload');
            }
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $docname = $doc->getClientOriginalName();
            $imgname = $data->getClientOriginalName();
            $request->file('doc')->move('electricalProduct-document',$docname);
            $request->file('img')->move('electricalProduct-img',$imgname);
            $items->imgPath = "/electricalProduct-img/".$imgname;
             $items->docPath = "/electricalProduct-img/".$docname;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('electrical-upload');
        }else{
            return  redirect('electrical-upload');
        }
    }

    //delete
            public function delete(Request $request)
        {
        $items= new electrical;
        $id =  $request->input('productId');  
        $delete = electrical::where('productId',$id);
        $delete->delete();
        Storage::delete('file.jpg');
        return  redirect('electrical-upload');
        }
}
