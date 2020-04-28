<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class test extends Controller
{
    public function show($id){
    $item = DB::table( 'foodcategory' )->where('id',$id)->first();

if(!$item){


    abort(404);
}

    //return 5;
 return view('index',[
'item'=>$item->Name]);  
}
}