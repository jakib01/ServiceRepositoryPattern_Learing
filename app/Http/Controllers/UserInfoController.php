<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    public function index(){
        $userInfo = UserInfo::get();
        return view('welcome',compact('userInfo'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_no' => 'required'
        ]);

        UserInfo::create($request->all());

        return back()->with('status', 'User Info successfully added');
    }

//    public function edit(Test $test){
//        return view('welcome', compact(''));
//    }


    public function update(Request $request, Test $test){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_no' => 'required'
        ]);

        $test->update($request->all());
        return back()->with('status', 'User Info successfully Updated');
    }

        public function destory(Test $test){
            $test->delete();
            return back()->with('status', 'User Info successfully Delete');
    }

}
