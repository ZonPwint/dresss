<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orderdetail extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['voucherno','totalamount','totaldress','orderdate','deliveryaddress','status','shipping_id','user_id'];
    public function shipping(){
    	return $this->belongsTo('App\Models\Shipping');
    }
     public function user(){
    	return $this->belongsTo('App\Models\User');
    }
     public function dresses(){
    	return $this->belongsToMany('App\Models\Dress','dress_order','dress_id','order_id')->withPivot('qty');
    }
}
