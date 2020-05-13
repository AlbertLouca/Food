<?php

namespace App;
use App\item;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
class order extends Model
{
    //
   // public $id ;
    public $status='preparing';
    public $ordering_time;
    public $estimated_time;
    public $items = [] ;
    public $description;
    public $total;
    //public $Rating;
protected $fillable = ['Description','Status','Total','OrderingTime'];
protected $hidden = ['id','CustomerID','AddressID'];

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
public function address()
{
    return $this->belongsTo('App\Address', 'AddressID');
}

}
