<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	//Table name
    protected $table = 'tag';

    //Primary Key
    public $primaryKey = 'tag_id';

    public function file(){
    	return $this->hasMany('App\File');
    }
}
