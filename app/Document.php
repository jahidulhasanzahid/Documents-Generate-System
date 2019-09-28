<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{



	protected $fillable = [
        'teacherName', 'title','courseName','dateOfSubmit',
    ];


	  public function user()
	  {
	    return $this->belongsTo(User::class);
	  }
	 
}
