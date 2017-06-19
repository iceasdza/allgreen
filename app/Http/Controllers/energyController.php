<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\energy;
use Illuminate\Http\File;

class energyController extends Controller
{

        public function __construct()
    {
        $this->middleware('checkUser');
    }
        public function index(){
        $itemsCount= energy::all()->count();
        $items= energy::all();
        return view('manage.energy',compact('items','itemsCount'));
        }

          //upload
            public function store(Request $request)
    {
       $items= new energy;
            if($request->hasFile('img')){
            $data = $request->file('img');
            $doc = $request->file('doc');
            if($doc == null){
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $imgname = $data->getClientOriginalName();
            $request->file('img')->move('energyProduct-img',$imgname);
            $items->imgPath = "/energyProduct-img/".$imgname;
            $items->docPath = null;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('energy-upload');
            }
            $prodname = $request->input('prodName');
            $prodCode = $request->input('prodCode');
            $proDesc = $request->input('prodDesc');
            $docname = $doc->getClientOriginalName();
            $imgname = $data->getClientOriginalName();
            $request->file('doc')->move('energyProduct-document',$docname);
            $request->file('img')->move('energyProduct-img',$imgname);
            $items->imgPath = "/energyProduct-img/".$imgname;
             $items->docPath = "/energyProduct-img/".$docname;
            $items->productName = $prodname;
            $items->productCode = $prodCode;
            $items->productDes = $proDesc;
            $items->save();
            return  redirect('energy-upload');
        }else{
            return  redirect('energy-upload');
        }
    }

    //delete
            public function delete(Request $request)
        {
        $items= new energy;
        $id =  $request->input('productId');  
        $delete = energy::where('productId',$id);
        $delete->delete();
        Storage::delete('file.jpg');
        return  redirect('energy-upload');
        }

}
