<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\ResetsUserPasswords;
use Auth;

class AdminController extends Controller
{

    public function resetPassword(Request $request)
    {
        $request->validate(
            [
            'password'=>'required',
            'new_password'=>'required',
            'confirm_password'=>'required'
       ]
    );

     if(Auth::check()){
         if(Auth()->user()->user_type === 1){
            if(Hash::check($request->input('password'), Auth()->user()->password)){
                if($request->input('new_password') === 
                   $request->input('confirm_password')){
                       $user = Auth()->user();
                      $user->forceFill([
                           'password' => Hash::make($request->input('new_password')),
                    ])->save();
                    return back()->with('success','You have successfully changed your password');
                 }
         else{
            return back()->with('fail','You are not authenticated to perform this action');
         }
       }
       else{
        return back()->with('fail','You are not authenticated to perform this action');
                 }
              }
         }
    }
}
