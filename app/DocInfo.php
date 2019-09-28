<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocInfo extends Model
{
    
    protected $fillable = [
        'question', 'answer',
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
