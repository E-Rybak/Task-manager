<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'content'];
    
    public function project() {
    	return $this->belongsTo('App\Project');
    }
}
