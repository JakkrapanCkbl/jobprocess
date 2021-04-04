<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AutoCompleteController extends Controller
{
    function index(){
    	return view('test/auto');
    }

    function show(Request $request){
    	if($request->get('query')){
    		$query=$request->get('query');
    		//echo $query;
    		$data = DB::table('provinces')->where('name_th', 'LIKE', "{$query}%") ->get();
    		$output = '<ul class="dropdown-menu" style="display:block; position:relative">';
    		foreach($data as $row){        
				$output .= '<li><a href="#">'.$row->name_th.'</a></li>';		        
			}
			$output .= '</ul>';
			echo $output;
    	}
    }

	public function showamphur(Request $request){
		if($request->get('query')){
    		$query=$request->get('query');
    		//echo $query;
    		$data = DB::table('amphures')->where('name_th', 'LIKE', "{$query}%") ->get();
    		$output = '<ul class="dropdown-menu" style="display:block; position:relative">';
    		foreach($data as $row){        
				$output .= '<li><a href="#">'.$row->name_th. '      '.$row->code.'</a></li>';		        
			}
			$output .= '</ul>';
			echo $output;
    	}
	}
}
