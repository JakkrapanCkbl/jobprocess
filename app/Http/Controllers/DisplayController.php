<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Job;
use DB;

class DisplayController extends Controller
{
    public function index(){        
		//return DataTables::of(Job::query())->make(true);  
    	$strsql = DB::select('SELECT * FROM jobs order by id DESC');
    	return DataTables::of($strsql)->make();

	}
	public function create(){        
		return view('test/display');    
	}
}
