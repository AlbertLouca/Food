<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class selectedfood extends Model
{
    
public $id;
public $Price;
public $Name;
public $Quantity;
protected $fillable = ['id','CategoryID','Name', 'Description','Price','Photo'];
       
public function __construct($id){

    if ($id=-1){

        $Quantity=0;
    }
    else {
$detail=DB::table('items')->where('id',$id)->first();
$this->Name=$detail->Name;
$this->Price=$detail->Price;

    }
   
}


public function sum(){

return $price*$Quantity;

}
public function add(){

$Quantity=$Quantity+1;


}



}