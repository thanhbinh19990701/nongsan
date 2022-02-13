<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public $timestamps = true;
    protected $fillable = ['coupon_name','coupon_code','coupon_number','coupon_condition','coupon_time'];
    protected $primaryKey = 'coupon_id';
    protected $table = 'coupon';
}
