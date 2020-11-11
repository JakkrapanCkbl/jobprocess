<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodController extends Controller
{
    function index(){
    	return view('test.food');
    }

    function loadmore(Request $request){
    	$foods=Food::paginate(4);
		$html='';
		foreach ($foods as $food) {
		        $html.='<div class="col-md-6" align="center">
		              <h4><b>Title</b></h4>
		              <img src="'.$food->url.'" class="food">
		              <br>
		              <strong>Description</strong>
		              </div>';
		}
		if ($request->ajax()) {
            return $html;
        }
        return view('test.food');
    }
}
