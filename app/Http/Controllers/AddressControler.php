<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Address;

class AddressControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
               //$address = DB::table('addresses')->where('id',$id)->first();

        //return $address;
}
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 //return view("payment");
return view('cart/create');

     
    }

  
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { //dump(request()->all());
  //die('hello');


if($request->input('PreviousAddress') =="" ){

          $request->validate([
'StreetName'=> 'required',
'Area'=> 'required',
'BuildingNo'=> 'required|numeric',
'Floor'=> 'required|numeric',
 'City'=> 'required',
'Landmark'=>'required',
'Appartement'=>'required|numeric',








]);}
else
{ $request->validate([

'PreviousAddress'=>'required',








]);


}




//print_r($request->input());

$request->session()->put('data',$request->input());


//$details = $request->session()->get('data', 'default')['PreviousAddress'];
  



// $value = $request->session()->get('data', 'default')['City'];
      // $value = $request->session()->get('data');



    return redirect()->intended('payment');


//return view('payment');

//return redirect()->route('payment');


//return redirect('cart/payment');

 }


  



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
