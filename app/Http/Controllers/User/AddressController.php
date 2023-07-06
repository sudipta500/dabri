<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Address;

class AddressController extends Controller
{
    public function index(){
        return view('user.pages.address');
    }
    public function createAddress(Request $req){
        $userId=$req->session()->has('userId');
        $validate=$req->validate([
           'name' => 'required',
           'phone_number'=> 'required|numeric',
           'primary_address'=>'required',
           'second_address'=>'required'
        ]);
        $address=new Address;
        $address->user_id=$userId;
        $address->name=$req->name;
        $address->email=$req->email;
        $address->phone_number=$req->phone_number;
        $address->primary_address=$req->primary_address;
        $address->second_address=$req->second_address;
        $address->save();
        return redirect('/checkout');
    }

    public function updateAddress($id){
        $address=Address::find($id);
        return view('user.pages.edit_address',['address'=>$address]);
    }
    public function updateAddressData(Request $req,$id){
        $address=Address::find($id);
        $address->name=$req->name;
        $address->email=$req->email;
        $address->phone_number=$req->phone_number;
        $address->primary_address=$req->primary_address;
        $address->second_address=$req->second_address;
        $address->save();
        return redirect('/checkout');

    }
}
