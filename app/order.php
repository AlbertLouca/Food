<?php

namespace App;
use App\item;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
class order extends Model
{
    //
    protected $id ;
    protected $status='preparing';
    protected $ordering_time;
    protected $estimated_time;
    protected $items = [] ;
    protected $description;


    public function additem($item)
    {
       // die(gettype($items));
      
            array_push($this->items,$item);
       // echo $item;
       // echo $this->items[0];

      
        
    }

}
