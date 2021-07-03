<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use DB;

class FrontendController extends Controller
{
    public function login(){
        return view('backend.pages.login');
    }

    public function loginsubmit(Request $request){
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $data=$request->all();
        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            Session::put('user',$data['email']);
            //request()->session()->flash('success','Successfully login');
            return redirect()->route('home');}
        
        else{
            return redirect()->back();
        }
    }

    public function logout(){
        session::forget('user');
        return redirect()->route('login.form');
    }
}
