<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller{
    function renderHome(){
        if(Auth::id()){
            $role = Auth()->user()->role;
            if($role == 'user'){
                return view('welcome');
            }else if($role == 'admin'){
                return view ('admin.dashboard');
            }
            else {
                return redirect()-back();
            }
        }else{
            return view('welcome');
        }
    }
}
