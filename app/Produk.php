<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Produk extends Eloquent
{
	protected $connection = 'mongodb';
	protected $collection = 'produk';

	protected $fillable = [
		'kodeproduk', 'barcode','namaproduk', 'stok', 'kategori', 'curr', 'unit', 'hargabeli', 'hargajual','disc', 'keterangan'
	];

	public function unity()
	{
		return $this->belongsTo('App\Unit', 'unit');
	}
}
