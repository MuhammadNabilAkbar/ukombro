<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class TransaksiSementara extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'transaksisementara';

	protected $fillable = [
		'nama', 'jumlah', 'unit', 'harga', 'hargajual'
	];

	public function hargajual()
	{
		return $this->belongsTo('App\TransaksiSementara', 'hargajual');
	}
}
