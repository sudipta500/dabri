<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\product;
use App\Models\Admin\PacketSize;

class SingleProductController extends Controller
{
    public function index( $id){
       $product= product::find($id);
       $productSize = PacketSize::all();
       if($product){
        return view('user.pages.single_product',['product'=>$product,'productSize'=> $productSize]);
       }else{
        return view('user.pages.single_product',['errorMessage'=>'This Product Not Available']);
       }
    }
}
