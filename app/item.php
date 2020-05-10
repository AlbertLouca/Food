<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    
    public $id;
    public $CategoryID;
    public $Name;
    public $Description;
    public $Price;
    public $img;

    protected $fillable = ['id','CategoryID','Name', 'Description','Price','Photo'];
        
     /* public function __construct($name ,$price){

            $this->Name=$name;
            $this->Price=$price;
        }

public function __construct ($id){

   $dummy= DB::table( 'items' )->where('id',$id)->first();
    $this->Name=$dummy->Name;
   
}
 */ 
public function __construct($i){


    $this->id=$i->id;
    $this->CategoryID=$i->CategoryID;
    $this->Name=$i->Name;
    $this->Description=$i->Description;
    $this->img=$i->Photo;
    $this->Price=$i->Price;




}


 



}
