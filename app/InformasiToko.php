<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class InformasiToko extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'informasitoko';

	protected $fillable = [
		'namainstansi', 'telepon','kodepos', 'deskripsi', 'alamat', 'foto'
	];
}
