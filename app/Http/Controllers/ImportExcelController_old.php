<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;
/* test for excel plugin ver 2.1.1 */
class ImportExcelController_old extends Controller
{
    function index()
    {
     $data = DB::table('customer')->orderBy('CustomerID', 'DESC')->get();
     return view('test.import_excel_old', compact('data'));
    }






    function import(Request $request)
    {
     $this->validate($request, [
      'select_file'  => 'required|mimes:xls,xlsx'
     ]);

     $path = $request->file('select_file')->getRealPath();

     $data = Excel::load($path)->get();
     //dd($data);
     if($data->count() > 0)
     {
       
       foreach ($data->toArray() as $key => $value) 
       {         
          foreach ($value[0] as $row_key => $row) {
            $insert_data[] = array(
             'CustomerName'  => $row[0],
             'Gender'   => $row[1],
             'Address'   => $row[2],
             'City'    => $row[3],
             'PostalCode'  => $row[4],
             'Country'   => $row[5]
            );
          }
       }

      if(!empty($insert_data))
      {
       DB::table('customer')->insert($insert_data);
      }
     }
     return back()->with('success', 'Excel Data Imported successfully.');
    }






   



}
