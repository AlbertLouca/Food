<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class selectedfood extends Model
{
    
public $id;
public $ItemID;
public $Price;
public $Name;
public $Quantity;
protected $fillable = ['quantity'];
protected $hidden = ['order_id','item_id'];
       
public function __construct($item){

   
$this->id=$item->id;
$this->Name=$item->Name;

$this->Price=$item->Price;
$this->ItemID=$item->id;
$this->Quantity=1;
    
  // die($this->Price);
}


public function sum(){

return $this->price*$this->Quantity;

}

public function increase(){

    $this->Quantity=$this->Quantity+1;


}
public function decrease(){
 
$this->Quantity=$this->Quantity-1;


}



}
