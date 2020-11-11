<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function index(){
    	return view('test.upload1');
    }

    function upload(Request $request) {      
		$this->validate($request, 
			//['select_image'  => 'required|image|mimes:jpg,png,gif|max:2048']);
			['select_image'  => 'required|max:2048']);
			$image = $request->file('select_image');      
			$new_name = rand() . '.' . $image->getClientOriginalExtension();      
			$image->move(public_path('img'), $new_name);      
			return back()->with('success', 'อัพโหลดไฟล์เรียบร้อยแล้ว')->with('path', $new_name); 
		}
}
