<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMedia;

class Profile_picController extends Controller
{
    public function mediafile(Request $request, $id){

        //    $validatedData = $request->validate([
        //       'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
     
        //      ]);
     
             $name = $request->file('image')->getClientOriginalName();
     
             $path = $request->file('image')->store('image');
            
          $user = new UserMedia;
          $user->user_id=$id;
          $user->title=$request->input('title');
          $user->mediafile=$name;
          $user->about_media=$request->input('about_media');


       $result=$user->save();
           
              if($result){
               return  $result;
              }
              else{
              return "Not inserted data";
              }
           return  "not Success";
           }
       
}
?>