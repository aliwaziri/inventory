<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchasetable extends Model
{
      public $timestamps = false;
     
	  public function products()
	{
		return $this->hasMany(producttable::class);
	}

}

