<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocInfoLab extends Model
{
    protected $fillable = [
        'apparatus', 'procedure',
    ];


    public function document()
	  {
	    return $this->belongsTo(Document::class);
	  }

	 public function user()
	  {
	    return $this->belongsTo(User::class);
	  }

}
