<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Job;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        //return view('admin.index');
        $jobs = Job::latest()->paginate(20);
        return view('dashboard.index',compact('jobs'));
    }

    public function search(Request $request)
    {
    	$search = $request->get('search');
    	$jobs = DB::table('jobs')->where('jobcode', 'like', '%'.$search.'%')
        ->orWhere('projectname','like','%'.$search.'%')
        ->orderBy('id', 'DESC')->paginate(20);
    	return view('dashboard.index',['jobs' => $jobs]);
    }
}
