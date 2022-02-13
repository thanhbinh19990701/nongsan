<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = true;
    protected $fillable = ['comment_name','comment_email','comment_desc'];
    protected $primaryKey = 'comment_id';
    protected $table = 'comment';
}
