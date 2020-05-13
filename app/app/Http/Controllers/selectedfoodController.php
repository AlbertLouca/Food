<?php

namespace App\Http\Controllers;
use DB;
use App\selectedfood;
use Illuminate\Http\Request;

class selectedfoodController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $item= DB::table( 'items' )->where('id',$id)->first();

        return $item;
      //  $selected= new selectedfood($id);
        
      //  return $selected;

    }

}
