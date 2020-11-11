<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DropdownController extends Controller
{
    function index(){
    	$list=DB::table('provinces')->get();
    	return view('test/province')->with('list',$list);

    }

    function fetch(Request $request){
    	$id=$request->get('select');
    	$result=array();
    	$query=DB::table('provinces')
    	->join('amphures','provinces.id','=','amphures.province_id')
    	->select('amphures.code','amphures.name_th')
    	->where('provinces.id',$id)
    	->groupBy('amphures.code','amphures.name_th')
    	->get();
    	$output='<option value="">เลือกอำเภอ</option>';
    	foreach ($query as $row){
    		$output.='<option value="'.$row->code.'">'.$row->name_th.'</option>';
    	}
    	echo $output;
    }
}

