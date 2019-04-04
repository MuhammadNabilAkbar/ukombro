<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class NewUser extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'newuser';

	protected $fillable = [
		'nama', 'telepon','username', 'password', 'hakakses', 'foto'
	];
}
