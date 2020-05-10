<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
        protected $fillable =['CardName','CardNumber','ExpireMonth','ExpireYear','SecurityCode'];
       protected $table = 'payments';


}
