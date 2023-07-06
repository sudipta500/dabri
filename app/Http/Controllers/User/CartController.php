<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Models\Admin\Category;
use App\Models\Admin\PacketSize;
use App\Models\Admin\product;
use App\Models\Admin\Cart;
use Illuminate\Http\Request;
use App\Models\Admin\Address;

class CartController extends Controller
{
    public function index(Request $req,$id){
        // $product= product::find($id);
        // $productSize = PacketSize::all();
        if($req->packet_size){
            $product=product::where('packet_size_id',$req->post('packet_size'))->where('flavour_name',$req->post('flavour_name'))->first();
            if($product){
                return to_route('/single_product', ['id' => $product]);
            }else{
                $req->session()->flash('errorMessage','This Product Not Available');
                return to_route('/single_product', ['id' => $id]);
            }
        }
        // dd($req->all());
        if($req->product_id){
            if($req->userId){
                $cartProduct=Cart::where('user_id',$req->userId)->where('product_id',$req->product_id)->first();
                if($cartProduct){
                    $cartProduct->quantity=$cartProduct->quantity+1;
                    $totalPrice=($cartProduct->price)+($req->price);
                    $cartProduct->price=$totalPrice;
                    $cartProduct->save();
                    return redirect('/cart');
                }else{
                    $cart=new Cart;
                    $cart->user_id=$req->userId;
                    $cart->product_id=$req->product_id;
                    $cart->price=$req->price;
                    $cart->quantity=1;
                    $cart->save();
                    return redirect('/cart');
                }

            }else{
                return redirect('/login');
            }

        }
    }

    public function cartUpadte(Request $req){
        if($req->action=='plush'){
            $cartProduct=Cart::where('id',$req->product_id)->first();
            $cartProduct->quantity=$cartProduct->quantity+1;
            $totalPrice=($cartProduct->price)+($req->price);
            $cartProduct->price=$totalPrice;
            $cartProduct->save();
            return redirect('/cart');
        }
        if($req->action=='minus'){
            $cartProduct=Cart::where('id',$req->product_id)->first();
            $cartProduct->quantity=$cartProduct->quantity-1;
            $totalPrice=($cartProduct->price)-($req->price);
            $cartProduct->price=$totalPrice;
            $cartProduct->save();
            return redirect('/cart');
        }
    }

    public function cartView(Request $req){
     $userId=$req->session()->has('userId');
     if($userId){
        $cartProduct=Cart::where('user_id',$userId)->with('product')->get();
        $price=0;
        foreach ($cartProduct as $key => $value) {
            $price=$price+$value->price;
        }
        // return $cartProduct;
        return view('user.pages.cart',['cartProduct'=>$cartProduct,'price'=>$price]);
     }
    }

    public function cartOperation(Request $req){
        $ProductID=$req->remove;
        $checkout=$req->checkout;
        if($ProductID){
           $cartProduct=Cart::destroy($ProductID);
           return redirect('/cart');
        }elseif ($checkout) {
            return redirect('/checkout');
        }else{
            return 'select';
        }

    }
}
