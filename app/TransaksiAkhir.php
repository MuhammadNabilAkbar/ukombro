<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class TransaksiAkhir extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'transaksiakhir';

	protected $fillable = [
		'kodetransaksi', 'nama', 'jumlah', 'unit', 'harga'
	];
}
