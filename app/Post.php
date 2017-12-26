<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name // You're able to change a table name with $table
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // timestampss
    public $timestamps = true;
}
