<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class userController extends Controller
{
    public function login(){
        return view('login');
    }
    public function reg(Request $req){
        $newreg= new User();
        $newreg->name=$req->superuser;
        $newreg->email=$req->superemail;
        $newreg->password=$req->superpass;
        $newreg->save();
    }
    public function log(Request $req){

    }
}
