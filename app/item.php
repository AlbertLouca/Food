<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    
    protected $id;
    protected $CategoryID;
    protected $Name;
    protected $Description;
    protected $Price;
    protected $img;

    protected $fillable = [
         'Name', 'Description','Price','Photo'];
         protected $hidden = ['id','CategoryID'];
     /* public function __construct($name ,$price){

            $this->Name=$name;
            $this->Price=$price;
        }

public function __construct ($id){

   $dummy= DB::table( 'items' )->where('id',$id)->first();
    $this->Name=$dummy->Name;
    
   // $this->Description=$description;
   // $this->Price=$price;
   // $this->img=$photo;
 
 */ 



 



}
