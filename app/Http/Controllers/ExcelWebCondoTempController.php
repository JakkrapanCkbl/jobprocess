<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\CondosImport;
use App\Exports\CondosExport;
use App\condo_temp;
use Maatwebsite\Excel\Facades\Excel;

class ExcelWebCondoTempController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        
        $tempdatas = condo_temp::paginate(10);
        //dd($tempdatas);
        return view('importdata.import_web_condo_temp', compact('tempdatas'));

    }


    public function export()
    {
       return Excel::download(new UsersExport(),'xx.xlsx');
    }
    



    public function import(Request $request)
    {
       //claer table
       condo_temp::truncate();
       //insert 
       ini_set('memory_limit', '-1');
       $condos = Excel::toCollection(new CondosImport(), $request->file('import_file'));
       foreach ($condos[0] as $condo) {
           //dd($condo[0]. ' '. $condo[1]. ' '. $condo[2].' '. $condo[3]);
          //$flight = App\Flight::updateOrCreate(['departure' => 'Oakland', 'destination' => 'San Diego'],['price' => 99]);
            condo_temp::where('web_scraper_order', $condo[0])->updateOrCreate(
              [
                'web_scraper_order' => $condo[0],
                'web_scraper_start_url' => $condo[1],
                'pagination' => $condo[2],
                'pagination_href' => $condo[3],
                'list_project_name' => $condo[4],
                'list_project_name_href' => $condo[5],
                'name_e_1' => $condo[6],
                'name_e_2' => $condo[7],
                'highlight' => $condo[8],
                'quick_info' => $condo[9],
                'location' => $condo[10],
                'level' => $condo[11],
                'building_no' => $condo[12],
                'unit_no' => $condo[13],
                'project_size' => $condo[14],
                'prices' => $condo[15],
                'map' => $condo[16],
                'utility' => $condo[17],
                'project_room_size' => $condo[18],
                'open_year' => $condo[19],
                'project_progress' => $condo[20],
                'project_near' => $condo[21],
                'park' => $condo[22],
                'owner' => $condo[23],
                'travel' => $condo[24],
                'list_room_type' => $condo[25],
                'list_image_src' => $condo[26],
                'web_scraper_order1' => $condo[27],
                'web_scraper_order2' => $condo[28],
                'map1' => $condo[29],
                'map2' => $condo[30],
                'map3' => $condo[31],
                'utility1' => $condo[32],
                'utility2' => $condo[33],
                'owner1' => $condo[34],
                'owner2' => $condo[35],
                'owner3' => $condo[36],
                'owner4' => $condo[37],
                'list_room_type1' => $condo[38],
                'list_room_type2' => $condo[39],
                'projectname_e' => $condo[40],
              ]);
       }
       return redirect()->route('excel_condo');
    }


    



}
