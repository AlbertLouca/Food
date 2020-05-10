<?php

namespace App\Http\Controllers;
use App\Payment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



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
        return view('payment/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { //die('store');
           $request->validate([
'CardName'=> 'required',

'CardNumber'=> 'required|numeric',
'ExpireMonth'=> 'required',
 'ExpireYear'=> 'required|numeric',
'SecurityCode'=>'required|numeric',

   ]);
$card = new Payment;
$card->CardName = $request->CardName;
$card->CardNumber= $request->CardNumber;
$card->ExpireMonth = $request->ExpireMonth;
$card->ExpireYear = $request->ExpireYear;
$card->SecurityCode = $request->SecurityCode;
$card->save();
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
