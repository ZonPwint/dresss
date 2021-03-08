<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Dress extends Model
{
    use HasFactory;
    use SoftDeletes;
     protected $fillable=['name','photo','price','discount','description','category_id'];
     public function category(){
    	return $this->belongsTo('App\Models\Category');
    }
    public function orderdetails(){
    	return $this->belongsToMany('App\Models\Orderdetail','dress_order','dress_id','order_id')->withPivot('qty');
    }
}
