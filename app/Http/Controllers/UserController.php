<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;

class UserController extends Controller
{
    public function autenticacion(Request $request){
      if (Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])) {
        return view('admin.index');
      }
      return back();
    }
    public function logout(){
      Auth()->logout();
      return  Redirect::to('/admin');
    }
}
