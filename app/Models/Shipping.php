<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shipping extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['fee','township_id'];
    public function township(){
    	return $this->belongsTo('App\Models\Township');
    }
    public function orderdetail(){
    	return $this->hasOne('App\Models\Order');
    }
    
}
