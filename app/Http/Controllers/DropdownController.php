<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DropdownController extends Controller
{
	function index()
	{
		$list = DB::table('provinces')->get();
		return view('test/province')->with('list', $list);
	}

	function fetch(Request $request)
	{
		$id = $request->get('select');
		$query = DB::table('provinces')
			->join('amphures', 'provinces.id', '=', 'amphures.province_id')
			->select('amphures.code', 'amphures.name_th')
			->where('provinces.code', $id)
			->groupBy('amphures.code', 'amphures.name_th')
			->get();

		$output = '<option value="">เลือกอำเภอ</option>';
		foreach ($query as $row) {
			$output .= '<option value="' . $row->code . '">' . $row->name_th . '</option>';
		}
		echo $output;
	}

	function fetch_amphure(Request $request)
	{
		$id = $request->get('select');
        $id = DB::table('amphures')->where('code', $id)->pluck('id');
		$query = DB::table('amphures')
			->join('districts', 'amphures.id', '=', 'districts.amphure_id')
			->select('districts.id', 'districts.name_th')
			->where('districts.amphure_id', $id)
			->groupBy('districts.id', 'districts.name_th')
			->get();
		$output = '<option value="">เลือกตำบล</option>';
		foreach ($query as $row) {
			$output .= '<option value="' . $row->id . '">' . $row->name_th . '</option>';
		}
		echo $output;
	}
}
