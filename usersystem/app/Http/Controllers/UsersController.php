<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index() {
      $json_data = file_get_contents("json/userData.json");   
      $users = json_decode($json_data, true);
      //dd($users);
        return view('users',compact('users'));
      }
      public function store_data(Request $request){
        $validated = $request->validate([
          'name' => 'required',
          'image' => 'required|mimes:jpg,jpeg,png,bmp',
          'address' => 'required',
          'gender' => 'required',
        ]);
        if(file_exists('json/userData.json')){
          $currentData=file_get_contents('json/userData.json');
          $arr=json_decode($currentData,true);
          $imageName = '';
          if ($image = $request->file('image')){
              $imageName = time().'-'.uniqid().'.'.$image->getClientOriginalExtension();
              $image->move('images', $imageName);
          }
          $user=array(
            'id'=>uniqid(),
            'name'=>$request['name'],
            'image'=>$imageName,
            'address'=>$request['address'],
            'gender'=>$request['gender']
          );
          $arr[]=$user;
          $json=json_encode($arr,JSON_PRETTY_PRINT);
          file_put_contents('json/userData.json',$json);
          return redirect()->route('index');
        }
  }
  
  public function updatedata(Request $request){

  }

  

}