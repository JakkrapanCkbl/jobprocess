<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchController extends Controller
{
    function search(){
    	return view('test/search');
    }

    function action(Request $request){
    	if($request->ajax()){
    		$output='';
    		$result=$request->get('query');
    		if($result!=''){
    			$data=DB::table('jobs')
    			->where('projectname','like','%'.$result.'%')
    			->orWhere('jobcode','like','%'.$result.'%')->get();
    		}else{
    			$data=DB::table('jobs')->get();
    		}
    		$total_row=$data->count();
    		if($total_row>0){
    			foreach ($data as $row) {
    				$output.='<tr>
    				<td>'.$row->id.'</td>
    				<td>'.$row->jobcode.'</td>
    				<td>'.$row->projectname.'</td>
    				</tr>';
    			}
    		}else{
    			$output="<tr><td align='center' colspan='5'>Job not found!</td></tr>";
    		}
    		$data=array('table_data'=>$output,'total_data'=>$total_row);
    		echo json_encode($data);
    	}
    }
}
