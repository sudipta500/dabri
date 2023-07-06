<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\OrderItem;
use App\Models\Admin\Cart;

class orderItemController extends Controller
{
    public function orderItem(Request $request ){
        $validate=$request->validate([
            'address' => 'required',
            'payment'=>'required'
        ]);
        // return $request->all();
        $cartProduct=Cart::where('user_id',$request->userId)->get();
        //    return $cartProduct;
        foreach ($cartProduct as $key => $value) {
            $orderItem=new OrderItem;
            $orderItem->user_id=$request->userId;
            $orderItem->product_id=$value->product_id;
            $orderItem->quantity=$value->quantity;
            $orderItem->price=$value->price;
            $orderItem->payment_type=$request->payment;
            $orderItem->address_id=$request->address;
            $orderItem->save();
            Cart::destroy($value->id);
        }
        return redirect('/');
        // $orderItem->
        // return $request->all();
    }


    public function showItem($id){
        $OrderItem = OrderItem::where('user_id',$id)->with('address','product')->get();
        return view('user.pages.my-order',['OrderItem'=>$OrderItem]);
    }
}
