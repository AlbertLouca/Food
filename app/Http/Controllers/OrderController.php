<?php

namespace App\Http\Controllers;

use App\order;
use App\foodcategory;
use DB;
use App\item;
use Illuminate\Http\Request;
use Session;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders= DB::table( 'orders' )->get();

        return view('show', ['order'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


public function add($id){

  $i=  app('App\Http\Controllers\ItemController')->index($id);
  


//$a= new item($item->Name,$item->Description,$item->Price,$item->Photo);

$oldorder=Session::has('order') ? Session::get('order') :null;
$order= new order();
//echo $i->Photo;
$item= new item();
$item->id=$i->id;
$item->Name=$i->Name;
$item->Description=$i->Description;
$item->img=$i->Photo;
$item->Price=$i->Price;
//$item->CategoryID=$i->CategoryID;   // msh mawgoudddddd ====================
$order->additem($item);
die($order->items[0]->Name);
//$request->session()->put('order',$order);
//dd($request->session()->get('order'));
return redirect('/menu');

}

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(order $order)
    {
        //
    }
}
