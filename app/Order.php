<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name','telephone','email','zip','address1','address2','address3','payment','name2','telephone2','zip2','address4','address5','address6','status','advertisingcode','month','date','year',
    ];
}
