<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class test extends Controller
{
    public function show(){
    $user = DB::table( 'user' )->where('FirstName','Albert')->first();

if(!$user){


    abort(404);
}

    return view('login',[
'user'=>$user->LastName ]);
}
}