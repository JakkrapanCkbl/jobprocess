<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;



class Job2controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=Job::all();
        return response()->json($jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job=new Job();
        $job->jobcode=$request->get('jobcode');
        $job->reportcode=$request->get('reportcode');
        $job->projectname=$request->get('projectname');  
        $job->proplocation=$request->get('proplocation');         
        $job->client=$request->get('client');
        $job->customer=$request->get('customer');
        $job->prop_type=$request->get('prop_type');
        $job->prop_size=$request->get('prop_size');
        $job->percentfinish=$request->get('percentfinish');
        $job->startdate=$request->get('startdate');
        $job->inspectiondate=$request->get('inspectiondate');
        $job->lcduedate=$request->get('lcduedate');
        $job->clientduedate=$request->get('clientduedate');
        $job->save();
        return response()->json($job);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$job=Job::find($id);
        $job=Job::findOrFail($id);
        return response()->json($job);
    }

     public function showbycode($jobcode)
    {   
        $job=Job::where('jobcode',$jobcode);       
        return response()->json($job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job=Job::find($id);
        $job->jobcode=$request->get('jobcode');
        $job->reportcode=$request->get('reportcode');
        $job->projectname=$request->get('projectname'); 
        $job->proplocation=$request->get('proplocation');      
        $job->client=$request->get('client');
        $job->customer=$request->get('customer');
        $job->prop_type=$request->get('prop_type');
        $job->prop_size=$request->get('prop_size');        
        $job->startdate=$request->get('startdate');
        $job->inspectiondate=$request->get('inspectiondate');
        $job->lcduedate=$request->get('lcduedate');
        $job->clientduedate=$request->get('clientduedate');
        $job->update();
        return response()->json($job);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job=Job::find($id);
        $job->delete();
        return response()->json($job);
    }
}
