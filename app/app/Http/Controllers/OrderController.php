<?php

namespace App\Http\Controllers;
use App\selectedfood;
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
    if ($oldorder){
         $order=$oldorder;   
    }
    else {
             $order= new order();
         }

        // if selected food already in orders increase quantity else add it

        //die('test i :'.$i->id .' success');
    $item= new selectedfood($i); // by3ml item gdida byraga3 el quantity b unull fa btrga3 tzid tany l 1 /2 
    //die('test item :'.$item->id);
    if(in_array($item->id,array_column($order->items, 'id'))){
        //die($item->Quantity .' Found');
       $foundin= array_search($item->id,array_column($order->items, 'id'));
        /// die($foundin);
       $order->items[$id]->increase();
        //die($item->Quantity .' really?');
       // die(array_search($item->Quantity,array_column($order->items, 'Quantity')));   
    }
     else{
        //var_dump($item);
        //echo"=============================================";
        //$item->CategoryID=$i->CategoryID;   // msh mawgoudddddd ====================
        //$order->additem($item);
        $order->items[$item->id]=$item;
         //  die('test items in order : '.var_dump($order->items));
        //echo $order->items[0]->id;
        //var_dump($order); 
         }
       
        //die(var_dump($order->items[0]->Quantity));
        Session::put('order', $order);
        //$request->session()->put('order',$order);
        //dd($request->session()->get('order'));
      
     //die(var_dump($order->items[0]->Quantity));
      return redirect('/menu');

    }

 public function remove($id){
    // die($id);
    $selected=  app('App\Http\Controllers\selectedfoodController')->index($id);
$order=Session::get('order');

//die(var_dump($i->id));

//$foundin= array_search($selected->id,array_column($order->items,'id'));
//die(var_dump($order->items) . ' found in :  '. $foundin .' former id :'. $selected->id);
  //  die(var_dump($foundin));
if($order->items[$id]->Quantity>1){
    $order->items[$id]->decrease();
   // die('testing >1');

}
else {
   // die(var_dump($order->items));
    unset($order->items[$id]);

    if(empty($order->items))
    Session::forget('order');
}






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
