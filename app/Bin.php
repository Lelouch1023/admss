<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bin extends Model
{
    
    //Table Name
    protected $table = 'bins';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
