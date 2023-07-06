<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\product;
use App\Models\Admin\Category;


class ShopController extends Controller
{
    public function index(Request $req){
        $catagoryAll= Category::all();
        if($req->search){
            $searchItem=$_GET['search'];
            $product =product::where('flavour_name','LIKE',"%$searchItem%")->get();
            return view('user.pages.shop',['product'=>$product,'category'=>$catagoryAll]);
        }else{
            if($req->categoryFilter){
                $checked= $_GET['categoryFilter'];
                // return $checked;
                $product =product::whereIn('category_id', $checked)->get();
                return view('user.pages.shop',['product'=>$product,'category'=>$catagoryAll]);
            }else{
                $product =product::with('category')->get();
                return view('user.pages.shop',['product'=>$product,'category'=>$catagoryAll]);
            }
        }


    }
}
