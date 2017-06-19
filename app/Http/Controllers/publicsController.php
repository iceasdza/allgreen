<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\publics;
use Illuminate\Http\File;

class publicsController extends Controller
{

        public function __construct()
    {
        $this->middleware('checkUser');
    }
        public function index(){
        $itemsCount= publics::all()->count();
        $items= publics::all();
        return view('manage.publics',compact('items','itemsCount'));
        }

          //upload
            public function store(Request $request)
    {
       $items= new publics;
            if($request->hasFile('img')){
            $data = $request->file('img');
            $doc = $request->file('doc');
            if($doc == null){
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $imgname = $data->getClientOriginalName();
            $request->file('img')->move('publicsProduct-img',$imgname);
            $items->imgPath = "/publicsProduct-img/".$imgname;
            $items->docPath = null;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('publics-upload');
            }
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $docname = $doc->getClientOriginalName();
            $imgname = $data->getClientOriginalName();
            $request->file('doc')->move('publicsProduct-document',$docname);
            $request->file('img')->move('publicsProduct-img',$imgname);
            $items->imgPath = "/publicsProduct-img/".$imgname;
             $items->docPath = "/publicsProduct-img/".$docname;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('publics-upload');
        }else{
            return  redirect('publics-upload');
        }
    }

    //delete
            public function delete(Request $request)
        {
        $items= new publics;
        $id =  $request->input('productId');  
        $delete = publics::where('productId',$id);
        $delete->delete();
        Storage::delete('file.jpg');
        return  redirect('publics-upload');
        }

}
