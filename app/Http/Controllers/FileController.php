<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class FileController extends Controller
{
    function index(){
          return view('test.upload');
    }

    function show($id, $jobcode, $uploadfiletype) {
        // dd($id);
        return view('uploadfile.upload')
        ->with('id',$id)
        ->with('jobcode',$jobcode)
        ->with('uploadfiletype',$uploadfiletype);
    }


    function uploadx(){       
        $imageName=request()->file->getClientOriginalName();
	    request()->file->move(public_path('upload-image'),$imageName);
	    return response()->json('[uploaded =>/upload-image/'. $imageName .']');
    }

    function uploadxx($id){    
        
        // dd($id);
        $imageName=request()->file->getClientOriginalName();
	    request()->file->move(public_path('upload-image/'. $id),$imageName);
	    return response()->json('[uploaded =>/upload-image/'. $id . $imageName .']');
    }

    function upload($id, $jobcode, $uploadfiletype){     
        //dd($uploadfiletype);
        $imageName=request()->file->getClientOriginalName();
        if($uploadfiletype == 'report'){
            // $fullPath = asset('storage/project_reports/'.$jobcode.'/report/');
            $fullPath = public_path('storage/project_reports/'.$jobcode.'/report/');
        }else{
            $fullPath = public_path('storage/project_reports/'.$jobcode.'/');
        }
        //dd($fullPath);
        request()->file->move($fullPath,$imageName);

        return response()->json('[uploaded =>/'. $fullPath . '/'. $imageName .']');


        // //$fullPath = '/app/public/uploads/' . $id . '/' . $imageName;
        // $fullPath = $savepath . '/' . $imageName;       
        // request()->file->move(storage_path('/app/public/uploads/' . $id . '/'),$imageName);
        // //add to database
        // DB::table('jobs_img')->insert([
        //         'job_id' => $id,
        //         'img_type' => 'แบบแปลน',
        //         'img_path' => $fullPath
        //         ]);
        // return response()->json('[uploaded =>/app/public/uploads/' . $id . '/'.$imageName.']');



        // //return redirect()->back();
        // //return redirect()->route('admininputjob.edit', ['id' => $id]);
        // //return redirect('/dashboard')->with('message','Post created successfully');
    }
    

    public function getFiles()

	{
    	//$path = storage_path('');
        //dd($path);
        //$contents = Storage::get('/public/uploads/7505/1.jpg');
        //dd($contents);
        //$size = Storage::size('/public/uploads/7505/1.jpg');
        //dd($size);
    	$files = Storage::files('/public/uploads/7505/');   	
    	//dd($files);
    	return view('test/showfilelist',compact('files'));
	}

	

}
