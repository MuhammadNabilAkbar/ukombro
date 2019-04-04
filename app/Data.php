<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Data extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'data';

	protected $fillable = [
		'dataname', 'datatester'
	];
}
