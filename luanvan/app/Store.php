<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
   
    protected $fillable = [];
    protected $primaryKey = 'store_id';
    protected $table = 'store';
    public function admin(){
        return $this->belongsTo(admin::class, 'admin_id');
    }

}
