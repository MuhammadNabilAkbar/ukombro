<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransaksiSementara;
use App\TransaksiAkhir;
use App\Produk;

class TransaksiController extends Controller
{
	public function transaksi()
	{
		$data['produks'] = Produk::all();
		$data['trans'] = TransaksiSementara::all();
		$a = TransaksiSementara::all();
		$sum = 0;
		foreach ($a as $key => $value) {
			$sum = $sum + ($value->harga * $value->jumlah);
		}
		$data['datatotal'] = $sum;
		return view('Transaksi.index', $data);
	}

	public function transaksisementara(Request $r)
	{
		$new = new TransaksiSementara;
		if (TransaksiSementara::where('nama', $r->input('nama'))->exists()) {
			$a = TransaksiSementara::where('nama', $r->input('nama'))->first();
			$a->jumlah = $a->jumlah + 1;
			$a->save();
			return back();
		}
		$harga = Produk::where('namaproduk', $r->input('nama'))->value('hargajual');
		$unit = Produk::where('namaproduk', $r->input('nama'))->value('unit');
		$new->nama = $r->input('nama');
		$new->harga = $harga;
		$new->unit = $unit;
		$new->jumlah = "1";

		$new->save();
		return back();
	}

	public function transaksiakhir(){

		//

	}

	public function deletetransaksi($id)
	{
		$transsaksisementara = TransaksiSementara::find($id);
		if (isset($transsaksisementara)) {
			$transsaksisementara->delete();
		}else{
			echo "ada kesalahan !";
		}
		return back();
	}
}
