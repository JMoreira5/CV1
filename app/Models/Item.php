<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable = ['id', 'name', 'pompadour' ,'description', 'outstanding_image'];
    
	public $timestamps = false;
    
}
