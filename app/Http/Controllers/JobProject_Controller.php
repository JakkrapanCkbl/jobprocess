<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobProject_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$jobs = Job::latest()->paginate(5);  
        return view('jobproject.index',compact('jobs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);*/
        //$jobs = Job::all();
        $jobs = Job::paginate(10);
        return view('jobproject.index',compact('jobs'))
        ->with('i', (request()->input('page', 1) - 1) * 10);;
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobproject.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['jobcode' => 'required', 'projectname' => 'required']);
        $job = new Job(['jobcode' => $request->get('jobcode'), 'projectname' => $request->get('projectname')]);
        $job->save();
        return redirect()->route('jobproject.index')->with('success','บันทักข้อมูลเรียบร้อย');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //return view('jobproject.show',compact('job'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        //dd($id);
        return view('jobproject.edit',compact('job','id'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['jobcode'=>'required','projectname'=>'required']);
        $user = Job::find($id);
        $user->jobcode = $request->get('jobcode');
        $user->projectname = $request->get('projectname');
        $user->jobsize = $request->get('jobsize');
        $user->jobtype = $request->get('jobtype');
        $user->client = $request->get('client');
        $user->customer = $request->get('customer');
        $user->prop_type = $request->get('prop_type');
        $user->prop_size = $request->get('prop_size');
        $user->proplocation = $request->get('proplocation');
        $user->lcduedate = $request->get('lcduedate');
        $user->headvaluer = $request->get('headvaluer');
        $user->valuer = $request->get('valuer');
        $user->percentfinish = $request->get('percentfinish');
        $user->startdate = $request->get('startdate');
        $user->inspectiondate = $request->get('inspectiondate');
        $user->clientduedate = $request->get('clientduedate');
        //$user->created_at = $request->get('created_at');
        //$user->updated_at = $request->get('updated_at');

        $user->save();
        return redirect()->route('jobproject.index')->with('success','updated');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();
        return redirect()->route('jobproject.index')->with('success','ลบข้อมูลไปแล้ว');
    }
}
