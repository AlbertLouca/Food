<?php

namespace App;
use App\item;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
class order extends Model
{
    //
    public $id ;
    public $status='preparing';
    public $ordering_time;
    public $estimated_time;
    public $items = [] ;
    public $description;

   public function __construct(){


//echo $this->status;


   }

    public function additem($item)
    {
       // die(gettype($items));
      
            array_push($this->items,$item);
       // echo $item;
        //echo $this->status;

      
        
    }

}
