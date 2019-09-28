<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DocInfoProposal extends Model
{
    protected $fillable = [
        'background', 'objective','scope','assumption','dependence',
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
