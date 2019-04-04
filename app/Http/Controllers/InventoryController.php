<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Curr;
use App\Kategori;
use App\Unit;

class InventoryController extends Controller
{
 // MasterProduk
	public function masterproduk()
	{
		$produk = Produk::all();
		return view('Inventory.MasterProduk.index', compact('produk'));
	}

	public function addmasterproduk(){
		$kategori = Kategori::all();
		$unit = Unit::all();
		$curr = Curr::all();
		return view('Inventory.MasterProduk.add', compact('kategori', 'unit', 'curr'));
	}

	public function savemasterproduk(Request $r){
		$produk = new Produk();
		$produk->kodeproduk = $r->get('kodeproduk');
		$produk->barcode = $r->get('barcode');
		$produk->namaproduk = $r->get('namaproduk');        
		$produk->stok = $r->get('stok');        
		$produk->kategori = $r->get('kategori');        
		$produk->curr = $r->get('curr');        
		$produk->unit = $r->get('unit');        
		$produk->hargabeli = $r->get('hargabeli');        
		$produk->hargajual = $r->get('hargajual');        
		$produk->disc = $r->get('disc');        
		$produk->keterangan = $r->get('keterangan');        
		$produk->save();
		return redirect('inventory/masterproduk')->with('success', 'User has been successfully added'); 
	}

	public function editmasterproduk($id)
	{
		$kategori = Kategori::all();
		$curr = Curr::all();
		$unit = Unit::all();
		$produk = Produk::find($id);
		return view('Inventory.MasterProduk.edit', compact('produk','kategori', 'curr', 'unit', 'id'));
	}

	public function updatemasterproduk(Request $r, $id){
		$produk = Produk::find($id);
		$produk->kodeproduk = $r->get('kodeproduk');
		$produk->barcode = $r->get('barcode');
		$produk->namaproduk = $r->get('namaproduk');           
		$produk->kategori = $r->get('kategori');        
		$produk->curr = $r->get('curr');        
		$produk->unit = $r->get('unit');        
		$produk->hargabeli = $r->get('hargabeli');        
		$produk->hargajual = $r->get('hargajual');        
		$produk->disc = $r->get('disc');        
		$produk->keterangan = $r->get('keterangan');        
		$produk->save();
		return redirect('inventory/masterproduk')->with('success', 'Produk has been successfully added'); 
	}

	public function deletemasterproduk($id){
		$produk = Produk::find($id);
		$produk->delete();
		return redirect('inventory/masterproduk')->with('success','Produk has been  deleted');
	}

	public function stok($id){
		$produk = Produk::find($id);
		return view('Inventory.MasterProduk.stok', compact('produk', 'id'));
	}

	public function updatestok(Request $r, $id){
		$produk = Produk::find($id);
		$produk->stok = $r->get('stok');
		$produk->save();
		return redirect('inventory/masterproduk')->with('success', 'Curr has been successfully update');
	}

	// EndMasterProduk

	// MasterKonfigurasi

	// Curr
	public function curr()
	{
		$curr = Curr::all();
		return view('Inventory.MasterKonfigurasi.Curr.index', compact('curr'));
	}

	public function addcurr(){
		return view('Inventory.MasterKonfigurasi.Curr.add');
	}

	public function savecurr(Request $r){
		$curr = new Curr();
		$curr->curr = $r->get('curr'); 
		$curr->save();
		return redirect('inventory/masterkonfigurasi/curr')->with('success', 'Success'); 
	}

	public function editcurr($id){
		$curr = Curr::find($id);
		return view('Inventory.MasterKonfigurasi.Curr.edit', compact('curr', 'id'));
	}

	public function updatecurr(Request $r, $id){
		$curr = Curr::find($id);
		$curr->curr = $r->get('curr');      
		$curr->save();
		return redirect('inventory/masterkonfigurasi/curr')->with('success', 'Curr has been successfully update');
	}

	public function deletecurr($id){
		$curr = Curr::find($id);
		$curr->delete();
		return redirect('inventory/masterkonfigurasi/curr')->with('success','Curr has been  deleted');
	}

	// EndCurr

// Kategori
	public function kategori()
	{
		$kategori = Kategori::all();
		return view('Inventory.MasterKonfigurasi.Kategori.index', compact('kategori'));
	}

	public function addkategori(){
		return view('Inventory.MasterKonfigurasi.Kategori.add');
	}

	public function savekategori(Request $r){
		$kategori = new Kategori();
		$kategori->kategori = $r->get('kategori'); 
		$kategori->save();
		return redirect('inventory/masterkonfigurasi/kategori')->with('success', 'Success'); 
	}

	public function editkategori($id){
		$kategori = Kategori::find($id);
		return view('Inventory.MasterKonfigurasi.Kategori.edit', compact('kategori', 'id'));
	}

	public function updatekategori(Request $r, $id){
		$kategori = Kategori::find($id);
		$kategori->kategori = $r->get('kategori');      
		$kategori->save();
		return redirect('inventory/masterkonfigurasi/kategori')->with('success', 'Kategori has been successfully update');
	}

	public function deletekategori($id){
		$kategori = Kategori::find($id);
		$kategori->delete();
		return redirect('inventory/masterkonfigurasi/kategori')->with('success','Unit has been  deleted'); 
	}
	// EndKategori

	// Unit
	public function unit()
	{
		$unit = Unit::all();
		return view('Inventory.MasterKonfigurasi.Unit.index', compact('unit'));
	}

	public function addunit(){
		return view('Inventory.MasterKonfigurasi.Unit.add');
	}

	public function saveunit(Request $r){
		$unit = new Unit();
		$unit->unit = $r->get('unit'); 
		$unit->save();
		return redirect('inventory/masterkonfigurasi/unit')->with('success', 'Success'); 
	}

	public function editunit($id){
		$unit = Unit::find($id);
		return view('Inventory.MasterKonfigurasi.Unit.edit', compact('unit', 'id'));
	}

	public function updateunit(Request $r, $id){
		$unit = Unit::find($id);
		$unit->unit = $r->get('unit');      
		$unit->save();
		return redirect('inventory/masterkonfigurasi/unit')->with('success', 'Unit has been successfully update'); 
	}

	public function deleteunit($id){
		$unit = Unit::find($id);
		$unit->delete();
		return redirect('inventory/masterkonfigurasi/unit')->with('success','Unit has been  deleted'); 
	}
	// EndUnit





	// End MasterKonfigurasi

}
