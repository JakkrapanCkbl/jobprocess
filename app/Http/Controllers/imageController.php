<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use Validator;
use Redirect;
use View;
use App\Image;
use App\Album;
use Image as IntervesionImage;


class imageController extends Controller
{
	
	public function index(){
		$images = Image::get();
    	return view('test/album',compact('images'));
    }

    public function testalbum(){
        $images = Image::get();
        return view('test/inputmultiimage',compact('images'));
    }


    public function album(){    
        $albums = Album::with('images')->get();
        //return $albums;
        return view('test/welcomalbum',compact('albums'));
    }

    public function show($id){
        //dd($id);
        $albums = Album::findOrFail($id);
        //return $albums;
        return view('test/gallery',compact('albums'));
    }


    public function store(Request $request){
    	//dd($request->all());
    	$this->validate($request,[
            'album'=>'required|min:3|max:50',
            'image'=>'required'
        ]);

    	$album = Album::create(['name'=>$request->get('album')]);

    	if($request->hasFile('image')){
    		foreach($request->file('image') as $image){
    			$path = $image->store('uploads','public');
    			Image::create([
    				'name'=> $path,
    				'album_id'=>$album->id
    			]);
    		}
    	}
    	//return Redirect::back()->with('message', 'Successfully Save Your Image file.');
    	return "<div class='alert alert-success'>Album created successfully!</div>";
    }

    public function destroy()
    {
        $id = request('id');
        $image = Image::findOrFail($id);        
        $filename = $image->name;
        $image->delete();
        \Storage::delete('public/'.$filename);
        return redirect()->back()->with('message','Image deleted successfully!');
        //return"ok";
        
    }

    public function addImage(Request $request){
        $this->validate($request,[
            'image'=>'required'
        ]);
        $albumId= request('id');
        if($request->hasFile('image')){
            foreach($request->file('image') as $image){
                $path = $image->store('uploads','public');
                Image::create([
                    'name'=> $path,
                    'album_id'=>$albumId
                ]);
            }
        }
        return redirect()->back()->with('message','Images added successfully!');

    }

    public function albumImage(Request $request){
        $this->validate($request,[
            'image'=>'required'
        ]);
        $albumId= request('id');
        if($request->hasFile('image')){
                $file = $request->file('image');
                $path = $file->store('uploads','public');
                Album::where('id',$albumId)->update([
                    'image'=> $path,
                ]);
            }
        
        return redirect()->back()->with('message','Album images added successfully!');
    }


    /*Image Resize */
    public function upload(){
        $albums = Album::get();
        return view('test/upload2',compact('albums'));
    }

    /*Image Resize */
    public function postUpload(Request $request){
        if($request->hasFile('image')){
                $file = $request->file('image');
                $filename = time().'.'.$file->getClientOriginalExtension();
                IntervesionImage::make($file)->resize(100,100)->save('avatars/'.$filename);

                Album::create([
                    'image'=>$filename,
                    'name'=>'resizing image'
                ]);
                return back();
        }

    }



	public function multiplefileupload(Request $request)
	{
		$images=array();
		if($files=$request->file('images')){
			foreach($files as $file){
				$name=$file->getClientOriginalName();
				$file->move('img',$name);
				$images[]=$name;
				/*Insert your data*/
				//DB::table('img')->insert([
				//'image' => $name
				//]);
				/*Insert your data*/
			}
		}
		return redirect()->back()->with('message', 'Successfully Save Your Image file.');
	}


    


}