<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\printing;
use Illuminate\Http\File;

class printingController extends Controller
{
        public function __construct()
    {
        $this->middleware('checkUser');
    }
        public function index(){
        $itemsCount= printing::all()->count();
        $items= printing::all();
        return view('manage.printing',compact('items','itemsCount'));
        }

          //upload
            public function store(Request $request)
    {
       $items= new printing;
            if($request->hasFile('img')){
            $data = $request->file('img');
            $doc = $request->file('doc');
            if($doc == null){
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $imgname = $data->getClientOriginalName();
            $request->file('img')->move('printingProduct-img',$imgname);
            $items->imgPath = "/printingProduct-img/".$imgname;
            $items->docPath = null;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('printing-upload');
            }
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $docname = $doc->getClientOriginalName();
            $imgname = $data->getClientOriginalName();
            $request->file('doc')->move('printingProduct-document',$docname);
            $request->file('img')->move('printingProduct-img',$imgname);
            $items->imgPath = "/printingProduct-img/".$imgname;
             $items->docPath = "/printingProduct-img/".$docname;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('printing-upload');
        }else{
            return  redirect('printing-upload');
        }
    }

    //delete
            public function delete(Request $request)
        {
        $items= new printing;
        $id =  $request->input('productId');  
        $delete = printing::where('productId',$id);
        $delete->delete();
        Storage::delete('file.jpg');
        return  redirect('printing-upload');
        }

}
