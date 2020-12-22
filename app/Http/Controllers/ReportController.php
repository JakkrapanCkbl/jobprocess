<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use DB;
use SebastianBergmann\Environment\Console;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list = DB::table('provinces')->get();
        $listtwo = DB::table('amphures')->get();
        return view('report.create')->with('list', $list)->with('listtwo', $listtwo);
    }

    public function fetch(Request $request)
    {

        $id = $request->get('select');
        $result = array();
        $query = DB::table('transportation')
            // ->select('transportation.transname','transportation.transname', 'transportation.name_th')
            ->where('transportation.transname', $id)
            // ->groupBy('transportation.name_th')
            ->get();


        $output = '<option value="">เลือก</option>';
        foreach ($query as $row) {
            $output .= '<option value="' . $row->id . '">' . $row->name_th . '</option>';
        }
        // $output .= '<option value="test"> TEST</option>';
        echo $output;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'jobcode' => 'required',
            'projectname' => 'required',
            'province' => 'required',
            'amphures' => 'required',
            'obj_id' => 'required'
        ]);

        switch ($request->get('materialscore')) {
            case "ดีมาก":
                $materialscore = "ดีมาก";
                break;
            case "ดี":
                $materialscore = "ดี";
                break;
            case "ปานกลาง":
                $materialscore = "ปานกลาง";
                break;
            case "ต่ำ":
                $materialscore = "ต่ำ";
                break;
        }
        $request->merge([
            'roommaterial' => implode(',', (array) $request->get('roommaterial'))
        ]);
        Job::create([
            'jobcode' => $jobcode = $request->get('jobcode'),
            'reportcode' => $request->get('reportcode'),
            'projectname' => $request->get('projectname'),
            'startdate' => $request->get('startdate'),
            'inspectiondate' => $request->get('inspectiondate'),
            'lcduedate' => $request->get('lcduedate'),
            'jobsize' => $request->get('jobsize'),
            'easydiff' => $request->get('easydiff'),
            'jobtype' => $request->get('jobtype'),
            'client' => $request->get('client'),
            'prop_size' => $request->get('prop_size'),
            'proplocation' => $request->get('proplocation'),
            'province_code' => $request->get('province'),
            'amphure_code' => $request->get('amphures'),
            'district' => $request->get('district'),
            'customer' => $request->get('customer'),
            'customer_tel' => $request->get('customer_tel'),
            'prop_type' => $request->get('prop_type'),
            'obj_id' => $request->get('obj_id'),
            'valuationfee' => $request->get('valuationfee'),
            'valuationfee_case' => $request->get('valuationfee_case'),
            'valuer_n' => $request->get('valuer_n'),
            'headvaluer_n' => $request->get('headvaluer_n'),
            'level' => $request->get('level'),
            'moo' => $request->get('moo'),
            'soi' => $request->get('soi'),
            'soi' => $request->get('soi'),
            'deedno' => $request->get('deedno'),
            'deedtumbon' => $request->get('deedtumbon'),
            'deedamphur' => $request->get('deedamphur'),
            'transport_id' => $request->get('transport_id'),
            'roommaterial' => $request->get('roomaterial'),
        ]);
        return redirect('/dashboard')->with('message', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $list = DB::table('provinces')->get();
        $listtwo = DB::table('amphures')->get();
        $job = Job::find($id);
        $listthree = DB::table('jobs_img')->get();
        $list_transportation = DB::table('transportation')->get();
        $list_district = DB::table('districts')->get();
        return view('report.edit', compact('job'))->with('list', $list)->with('listtwo', $listtwo)
            ->with('listthree', $listthree)->with('listfour', $list_transportation)->with('listfive', $list_district);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'jobcode' => 'required',
            'province_code' => 'required',
            'amphure_code' => 'required',
        ]);

        $request->merge([
            'roommaterial' => implode(',', (array) $request->get('roommaterial'))
        ]);


        Job::where('id', $id)->update([
            'reportcode' => $request->get('reportcode'),
            // 'projectname' => $request->get('projectname'),
            'client' => $request->get('client'),
            'customer_tel' => $request->get('customer_tel'),
            'prop_size' => $request->get('prop_size'),
            'proplocation' => $request->get('proplocation'),
            'amphure_code' => $request->get('amphure_code'),
            // 'obj_id' => $request->get('obj_id'),
            'jobsize' => $request->get('jobsize'),
            'easydiff' => $request->get('easydiff'),
            'valuationfee' => $request->get('valuationfee'),
            'valuationfee_case' => $request->get('valuationfee_case'),
            'jobtype' => $request->get('jobtype'),
            'clientduedate' => $request->get('clientduedate'),
            'moo' => $request->get('moo'),

            //page6
            'propertiesnearused' => $request->get('propertiesnearused'),
            'prosperity' => $request->get('prosperity'),
            'liquidity' => $request->get('liquidity'),
            'planlaw' => $request->get('planlaw'),
            'marketvalue' => $request->get('marketvalue'),
            'forcesale' => $request->get('forcesale'),
            'valuer_n' => $request->get('valuer_n'),
            'headvaluer_n' => $request->get('headvaluer_n'),
            'fireinsurance' => $request->get('fireinsurance'),


            //page1
            'jobcode' => $request->get('jobcode'),
            'clientcode' => $request->get('clientcode'),
            'prop_type' => $request->get('prop_type'),
            'customer' => $request->get('customer'),
            'startdate' => $request->get('startdate'),
            'inspectiondate' => $request->get('inspectiondate'),
            'submissiondate' => $request->get('submissiondate'),
            'lcduedate' => $request->get('lcduedate'),

            //page2
            'lat' => $request->get('lat'),
            'lng' => $request->get('lng'),
            'roomno' => $request->get('roomno'),
            'level' => $request->get('level'),
            'deedno' => $request->get('deedno'),
            'buildingno' => $request->get('buildingno'),
            'buildingregno' => $request->get('buildingregno'),
            'province_code' => $request->get('province_code'),
            'deedtumbon' => $request->get('deedtumbon'),
            'deedamphur' => $request->get('deedamphur'),
            'landsize' => $request->get('landsize'),
            'roomarea' => $request->get('roomarea'),
            'ownership' => $request->get('ownership'),
            'mortgage' => $request->get('mortgage'),
            'sequester' => $request->get('sequester'),
            'deprive' => $request->get('deprive'),

            //page3
            'roomtype' => $request->get('roomtype'),
            'buildingyear' => $request->get('buildingyear'),
            'buildingstatus' => $request->get('buildingstatus'),
            'roomlocation' => $request->get('roomlocation'),
            'roomview' => $request->get('roomview'),
            'material_room1' => $request->get('material_room1'),
            'material_room2' => $request->get('material_room2'),
            'material_room3' => ($request->get('material_room_others') == '1' ? $request->get('material_room3') : ''),
            'material_floor1' => $request->get('material_floor1'),
            'material_floor2' => $request->get('material_floor2'),
            'material_floor3' => $request->get('material_floor3'),
            'material_floor4' => ($request->get('material_floor_others') == '1' ? $request->get('material_floor4') : ''),
            'material_wall1' => $request->get('material_wall1'),
            'material_wall2' => $request->get('material_wall2'),
            'material_wall3' => $request->get('material_wall3'),
            'material_wall4' => ($request->get('material_wall_others') == '1' ? $request->get('material_wall4') : ''),
            'material_ceiling1' => $request->get('material_ceiling1'),
            'material_ceiling2' => $request->get('material_ceiling2'),
            'material_ceiling3' => ($request->get('material_ceiling_others') == '1' ? $request->get('material_ceiling3') : ''),
            'material_bath1' => $request->get('material_bath1'),
            'material_bath2' => $request->get('material_bath2'),
            'material_bath3' => ($request->get('material_bath_others') == '1' ? $request->get('material_bath3') : ''),
            'material_door1' => $request->get('material_door1'),
            'material_door2' => $request->get('material_door2'),
            'material_door3' => $request->get('material_door3'),
            'material_door4' => ($request->get('material_door_others') == '1' ? $request->get('material_door4') : ''),
            'material_window1' => $request->get('material_window1'),
            'material_window2' => $request->get('material_window2'),
            'material_window3' => $request->get('material_window3'),
            'material_window4' => ($request->get('material_window_others') == '1' ? $request->get('material_window4') : ''),

            //page4
            'yearstart' => $request->get('yearstart'),
            'buildinghight' => $request->get('buildinghight'),
            'units' => $request->get('units'),
            'percentsell' => $request->get('percentsell'),
            'percenttransfer' => $request->get('percenttransfer'),
            'salesname' => $request->get('salesname'),
            'percenliverate' => $request->get('percenliverate'),
            'commonfee' => $request->get('commonfee'),
            'commonoverdue' => $request->get('commonoverdue'),
            'facilities' => $request->get('facilities'),
            'maintainstatus' => $request->get('maintainstatus'),

            //page5
            'soi' => $request->get('soi'),
            'road' => $request->get('road'),
            'province_code' => $request->get('province_code'),
            'amphure_code' => $request->get('amphure_code'),
            'district' => $request->get('district'),
            'estimatecondition' => $request->get('estimatecondition'),
            'remark' => $request->get('remark'),
            'nearmrt' => $request->get('transname'),
            'transport_id' => $request->get('transtation'),
            'nearmrtdistance' => $request->get('nearmrtdistance'),
            'frontstreet' => $request->get('frontstreet'),
            'publicentrance' => $request->get('publicentrance'),
            'materialstreet' => $request->get('materialstreet'),
            'streetwide' => $request->get('streetwide'),
            'streetareawide' => $request->get('streetareawide'),
            'utilities' => $request->get('utilities'),
            'cmn_transportation' => $request->get('cmn_transportation'),
            'remark2' => $request->get('remark2'),
        ]);
        //}

        //$this->updateAllExceptImage($request,$id);
        //return redirect()->back()->with('message','Post updated successfully');
        return redirect('/dashboard')->with('message', 'Post created successfully');
    }

    public function preview($id, Request $request)
    {
        $list = DB::table('provinces')->get();
        $listtwo = DB::table('amphures')->get();
        $job = Job::find($id);
        $listthree = DB::table('jobs_img')->get();
        $list_transportation = DB::table('transportation')->get();
        $list_district = DB::table('districts')->get();
        return view('report.preview', compact('job'))->with('list', $list)->with('listtwo', $listtwo)
            ->with('listthree', $listthree)->with('listfour', $list_transportation)->with('listfive', $list_district);
    }
}
