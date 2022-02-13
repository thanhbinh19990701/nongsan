<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Illuminate\Foundation\Auth\User as Authenticatable;



class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $fillable = ['customer_email','customer_password'];
    protected $hidden = ['customer_password'];
}
