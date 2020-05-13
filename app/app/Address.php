<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable =['City','Area','StreetName','BuildingNo','Floor','Appartement','Landmark'];
         protected $hidden = ['id','CustomerID'];


}
