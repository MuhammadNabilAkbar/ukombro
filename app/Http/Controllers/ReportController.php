<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Curr;
use App\Kategori;
use App\Unit;
use App\NewUser;

class ReportController extends Controller
{
    public function reportproduk()
    {
    	$produk = Produk::all();
    	return view('Report.reportproduk', compact('produk'));
    }

    public function reportcurr()
    {
    	$curr = Curr::all();
    	return view('Report.reportcurr', compact('curr'));
    }

    public function reportkategori()
    {
    	$kategori = Kategori::all();
    	return view('Report.reportkategori', compact('kategori'));
    }

    public function reportunit()
    {
    	$unit = Unit::all();
    	return view('Report.reportunit', compact('unit'));
    }

    public function reportuser()
    {
    	$user = NewUser::all();
    	return view('Report.reportuser', compact('user'));
    }


}
