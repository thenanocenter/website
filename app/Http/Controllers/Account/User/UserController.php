<?php

namespace App\Http\Controllers\Account\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function edit(){
        $user = \Auth::user();
        return view('account.user.edit',['user'=>$user]);
    }

    public function update(Request $request){
        $this->validate($request,[
            'password' => 'nullable|min:5'
        ]);
        $user = \Auth::user();
        $user->update($request->all());
        return redirect('/account/user')->withSuccess('Saved!');
    }

}
