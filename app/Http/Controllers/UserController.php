<?php

namespace App\Http\Controllers;

use App\Models\Admin\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function viewLogin(){
        return view('auth.login');
    }
    public function viewRegister(){
        return view('auth.register');
    }

    public function loginData(Request $req){
        $validated = $req->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $sameUser=User::where('email',$req->post('email'))->get();
        if((isset($sameUser[0]))){
            if(Crypt::decrypt($sameUser[0]->password)==$req->password){
                $req->session()->put('userId',$sameUser[0]->id);
                $req->session()->put('userName',$sameUser[0]->name);
                return redirect('/');
            }else{
                $req->session()->flash('errorMessage','Invalid Password');
                return redirect('login');
            }
           }else{
              $req->session()->flash('errorMessage','Email is invalid');
              return redirect('login');
           }
    }


    public function registerData(Request $req){
        $sameUser=User::where('email',$req->post('email'))->get();
        if((isset($sameUser[0]))){
            $req->session()->flash('errorMessage','Email is invalid or already taken');
            return redirect('register');
        }else{
        $validate=$req->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $user=new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Crypt::encrypt($req->input('password'));
        $user->save();
        $findUser=User::where('email',$req->post('email'))->get();
        $req->session()->put('userId',$findUser[0]->id);
        $req->session()->put('userName',$findUser[0]->name);
        return redirect('/');
     }
    }

    public function logout(Request $req){
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/');
    }
}
