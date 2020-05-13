<?php

namespace App\Http\Controllers;
use Nexmo\Laravel\Facade\Nexmo;
use App\Payment;
use App\Address;
use App\order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;
use App\selectedfood;




class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {//die("view payment");
        return view('payment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
       /*    $request->validate([
'CardName'=> 'required',

'CardNumber'=> 'required|numeric',
'ExpireMonth'=> 'required',
 'ExpireYear'=> 'required|numeric',
'SecurityCode'=>'required|numeric',

   ]);*/
/*$card = new Payment;
$card->CardName = $request->CardName;
$card->CardNumber= $request->CardNumber;
$card->ExpireMonth = $request->ExpireMonth;
$card->ExpireYear = $request->ExpireYear;
$card->SecurityCode = $request->SecurityCode;
$card->save();*/
//it works but it needs a table




$value = $request->session()->get('data', 'default')['PreviousAddress'];
if(!empty($value))
{
$substr = explode (".",$value);
$id=$substr[0];

$order= new order;
$order->Status='prepating';
$order->CustomerID=Auth::user()->id;

$order->AddressID =$id;
$order->Description ='null';
$o=Session::get('order');
$order->Total = $o->total;

$order->save();



}

else{ $address= new Address;
$address->StreetName=$request->session()->get('data', 'default')['StreetName'];
$address->CustomerID=Auth::user()->id;
$address->Appartement =  $request->session()->get('data', 'default')['Appartement'];
$address->Area = $request->session()->get('data', 'default')['Area'];
$address->BuildingNo = $request->session()->get('data', 'default')['BuildingNo'];
$address->Floor =  $request->session()->get('data', 'default')['Floor'];
$address->City = $request->session()->get('data', 'default')['City'];
$address->Landmark = $request->session()->get('data', 'default')['Landmark'];
$address->save();
$order= new order;
$order->Status='prepating';
$order->CustomerID=Auth::user()->id;

$order->AddressID =$address->id;
$order->Description ='no description';
$o=Session::get('order');
$order->Total = $o->total;

$order->save();


}
//pull retreives data and also clear it from the session

$name=Auth::user()->name;



foreach ($o->items as $i)
 { $selectedfood = new selectedfood($i);
 $selectedfood->quantity  = $i->Quantity;
 $selectedfood-> order_id = $order->id;
 $selectedfood-> item_id = $i->id;
$selectedfood->save();
}
Nexmo::message()->send([
    'to'   => '201119587845',

    'from' => '201119587845',
    'text' => 'hey your order is placed'
]);
    




//DB::insert('insert into payments (CardName, CardNumber,ExpireMonth,ExpireYear,SecurityCode) values (?,?,?,?,?)', [ $request->CardName,$request->CardNumber,$request->ExpireMonth,$request->ExpireYear,$request->SecurityCode]);

  return redirect()->intended('finish');

 }

 public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
