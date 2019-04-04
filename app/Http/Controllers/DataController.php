<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class DataController extends Controller
{

	public function create(){
		return view('datacreate');
	}

	 public function store(Request $request)
    {
        $d = new Data();
        $d->dataname = $request->get('dataname');
        $d->datatester = $request->get('datatester');     
        $d->save();
        return redirect('add')->with('success', 'Data has been successfully added');
    }
}
