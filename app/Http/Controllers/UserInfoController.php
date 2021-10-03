<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function index(){
        $userInfo = UserInfo::get();
        return view('welcome',compact('userInfo'));
    }
}
