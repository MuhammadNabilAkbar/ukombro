<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewUser;
use App\InformasiToko;

class MasterController extends Controller
{
	public function toko()
	{		
		return view('Master.Toko.index');
	}

	public function savetoko(Request $r){
		$toko = new InformasiToko();
		$toko->namainstansi = $r->get('namainstansi');
		$toko->telepon = $r->get('telepon');
		$toko->kodepos = $r->get('kodepos');        
		$toko->deskripsi = $r->get('deskripsi');        
		$toko->alamat = $r->get('alamat');        
		$toko->save();
		return redirect('/')->with('success', 'Success'); 
	}

	public function user(){
		$user = NewUser::all();
		return view('Master.User.index', compact('user'));
	}

	public function adduser(){
		return view('Master.User.add');
	}

	public function saveuser(Request $r){
		$user = new NewUser();
		$user->nama = $r->get('nama');
		$user->telepon = $r->get('telepon');
		$user->username = $r->get('username');        
		$user->password = $r->get('password');        
		$user->hakakses = $r->get('hakakses');        
		$user->foto = $r->get('foto');        
		$user->save();
		return redirect('master/user')->with('success', 'User has been successfully added'); 
	}

	public function edituser($id)
	{
		$user = NewUser::find($id);
		return view('Master.User.edit', compact('user', 'id'));
	}

	public function updateuser(Request $r, $id){
		$user = NewUser::find($id);
		$user->nama = $r->get('nama');
		$user->telepon = $r->get('telepon');
		$user->username = $r->get('username');        
		$user->password = $r->get('password');        
		$user->hakakses = $r->get('hakakses');        
		$user->save();
		return redirect('master/user')->with('success', 'User has been successfully update');
	}

	public function deleteuser($id){
		$user = NewUser::find($id);
		$user->delete();
		return redirect('master/user')->with('success','User has been  deleted');
	}

}
