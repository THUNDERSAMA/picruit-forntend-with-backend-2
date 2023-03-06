<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\social;
use App\Models\Category;

class GoogleController extends Controller
{
    public function loginwithgoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function callbackFromgoogle(){
        try{
            $google_user =Socialite::driver('google')->user();
          
$user=User::where('email',$google_user->getEmail())->first();


if(!$user){
  $new_user =User::create([
    'name'=>$google_user->getName(),
    'email'=>$google_user->getEmail(),
    'google_id'=>$google_user->getId(),
  ]);
 Auth::login($new_user);
 session()->put('users', $new_user);
 // return redirect()->intended('pages/dashboard');
 //session()->put('userlevel', 1);
return redirect()->intended('my-notification/success');

}
else{
   
    session()->put('users', $user);
    // Auth::login($user);
   // session()->put('userlevel', $category->category);
  
    return redirect()->intended('my-notification/loginsuccess');
    
   
}
    
        }
        catch(\Throwable $th){
            throw $th;

        }
       
    }
}
