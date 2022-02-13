<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [];
    protected $primaryKey = 'admin_id';
    protected $table = 'admin';
    public function getId()
    {
        return $this->admin_id;
    }
}
