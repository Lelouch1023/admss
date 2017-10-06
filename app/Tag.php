<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	//Table name
    protected $table = 'tags';

    //Primary Key
    public $primaryKey = 'tag_id';

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
