<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class LoginController extends Controller
{

    public function index(){
      $categorie = Categorie::with(['articles'])->get();
        return view('index',
        ['categorie'=>$categorie]
      );
    }
    public function login(){
      return view('login');
  }
    public function authenticate(Request $request){
      $info = $request->validate([
          'email'=>['required','email'],
          'password'=>['required'],
      ]);
      if($request->email=='admin@gmail.com' && $request->password=='admin'){
        // $idadmin = 1;
        // Session::put('idadmin',$idadmin);
        $idadmin = DB::table('admins')->select('idadmin')
        ->where('emailadmin','=', $request->email)
        ->where('mdpadmin','=', $request->password)
        ->get();
          if(count($idadmin)==1){
          $array = json_decode($idadmin,true);
          $idadmin = $array[0]['idadmin'];
          Session::put('idadmin',$idadmin);
          // session()->save();
          $ida = session('idadmin');
          return redirect()->route('formajoutarticle');
        }
      }
      else{
          $iduser = DB::table('users')->select('iduser')
          ->where('emailuser','=', $request->email)
          ->where('mdpuser','=', $request->password)
          ->get();
      if(count($iduser)==1){
      $array = json_decode($iduser,true);
      $id = $array[0]['iduser'];
      Session::put('iduser',$id);
      // session()->save();
      $ida = session('iduser');
      return view('index',);   
    }
  }
  return redirect()->back()->withErrors('erreur');
 }

//  register
public function registeruser(){
  return view('register');
}

public function storeinfo(Request $request){
  if($request){
    User::create([
      'emailuser'=>$request->email,
      'nameuser'=>$request->name,
      'mdpuser'=>$request->password
  ]);
  }
  else{
    echo 'erreur';
  }
}

}
