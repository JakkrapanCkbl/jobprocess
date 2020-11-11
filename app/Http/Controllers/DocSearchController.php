<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\docsearch_provinces;
use App\provinces;
use App\geographies;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class DocSearchController extends Controller
{

    public function index(Request $req)
    {
        $method = $req->method();
        if ($req->isMethod('post')) {
            $searchbox = Input::get('search');
            if ($req->has('search')) {
                // Search Button Clicked
                $search = DB::select(
                    "SELECT * FROM docsearch_provinces 
                    WHERE name_th LIKE '%" . $searchbox . "%' OR name_en 
                    LIKE '%" . $searchbox . "%' OR filepath LIKE '%" . $searchbox . "%' 
                    AND deleted_at IS NULL "
                );
                $view = view('docsearch.page', ['docsearch' => $search])->with('message', $searchbox . ' searched');
                return $view;
            }
        } else {
            // Default (Show all)
            $ViewsPage = DB::select('SELECT * FROM docsearch_provinces WHERE deleted_at IS NULL');
            return view('docsearch.page', ['docsearch' => $ViewsPage]);
        }
    }

    public function create()
    {
        $provinces = provinces::all();
        return view('docsearch.create', compact('provinces'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'docfile' => 'required'
        ]);
        if ($request->hasFile('docfile')) {

            $provinceID = $request->get('province');
            $province = provinces::where('code', $provinceID)->first();
            switch ($province->geography_id) {
                case 1:
                    $folderName = "north/" . $province->name_en . "/";
                    break;
                case 2:
                    $folderName = "central/" . $province->name_en . "/";
                    break;
                case 3:
                    $folderName = "northeast/" . $province->name_en . "/";
                    break;
                case 4:
                    $folderName = "west/" . $province->name_en . "/";
                    break;
                case 5:
                    $folderName = "east/" . $province->name_en . "/";
                    break;
                case 6:
                    $folderName = "south/" . $province->name_en . "/";
                    break;
                case 7:
                    $folderName = "bangkok/";
                    break;
                case 8:
                    $folderName = "perimeter/" . $province->name_en . "/";
                    break;
            }

            $total = count($_FILES['docfile']['name']);
            // Loop through each file
            for ($i = 0; $i < $total; $i++) {

                $fileName = $_FILES['docfile']['name'][$i];
                $path = ('docs/townplan/' . $folderName);
                move_uploaded_file($fileName, $path);
                request()->file('docfile')[$i]->move(public_path($path), $fileName);
                $doc_category_id = Input::get('doc_category_id');

                docsearch_provinces::create([
                    'province_code' => $province->code,
                    'name_th' =>  $province->name_th,
                    'name_en' => $province->name_en,
                    'doc_category_id' => $doc_category_id,
                    'filepath' => $path . $fileName
                ]);
            }


            // $fileName = $request->file('docfile')->getClientOriginalName();
            // $path = ('docs/townplan/' . $folderName);
            // request()->file('docfile')->move(public_path($path), $fileName);
            // $doc_category_id = Input::get('doc_category_id');

            // docsearch_provinces::create([
            //     'province_code' => $province->code,
            //     'name_th' =>  $province->name_th,
            //     'name_en' => $province->name_en,
            //     'doc_category_id' => $doc_category_id,
            //     'filepath' => $path . $fileName
            // ]);
            return redirect('/docsearch')->with('message', $total . ' Files added');
        }
    }
    public function edit($id)
    {
        $doc = docsearch_provinces::find($id);
        $provinces = provinces::all();
        return view('docsearch.edit', compact('doc', 'provinces'));
    }
    public function update($id, Request $request)
    {
        $this->validate($request, []);
        if ($request->hasFile('docfile')) {

            $provinceID = $request->get('province');
            $province = provinces::where('code', $provinceID)->first();
            switch ($province->geography_id) {
                case 1:
                    $folderName = "north/" . $province->name_en . "/";
                    break;
                case 2:
                    $folderName = "central/" . $province->name_en . "/";
                    break;
                case 3:
                    $folderName = "northeast/" . $province->name_en . "/";
                    break;
                case 4:
                    $folderName = "west/" . $province->name_en . "/";
                    break;
                case 5:
                    $folderName = "east/" . $province->name_en . "/";
                    break;
                case 6:
                    $folderName = "south/" . $province->name_en . "/";
                    break;
                case 7:
                    $folderName = "bangkok/";
                    break;
                case 8:
                    $folderName = "perimeter/" . $province->name_en . "/";
                    break;
            }
            $fileName = $request->file('docfile')->getClientOriginalName();
            $path = ('docs/townplan/' . $folderName);
            request()->file('docfile')->move(public_path($path), $fileName);
            $doc_category_id = Input::get('doc_category_id');

            docsearch_provinces::where('id', $id)->update([
                'province_code' => $province->code,
                'name_th' =>  $province->name_th,
                'name_en' => $province->name_en,
                'doc_category_id' => $doc_category_id,
                'filepath' => $path . $fileName
            ]);
        }
        // $this->updateAllExceptImage($request, $id);
        return redirect('/docsearch')->with('message', 'Document updated successfully');
    }
    public function updateAllExceptImage(Request $request, $id)
    {
        //Todo : file can't be moved
        $doc = docsearch_provinces::find($id);
        $provinceID = $request->get('province');
        $province = provinces::where('code', $provinceID)->first();
        $doc_category_id = Input::get('doc_category_id');

        $filenamee = explode('/', $doc->filepath);
        dd($filenamee[]);
        // $fileName = $doc->filepath->getClientOriginalName();
        $provinceID = $request->get('province');
        $province = provinces::where('code', $provinceID)->first();
        switch ($province->geography_id) {
            case 1:
                $folderName = "north/" . $province->name_en . "/";
                break;
            case 2:
                $folderName = "central/" . $province->name_en . "/";
                break;
            case 3:
                $folderName = "northeast/" . $province->name_en . "/";
                break;
            case 4:
                $folderName = "west/" . $province->name_en . "/";
                break;
            case 5:
                $folderName = "east/" . $province->name_en . "/";
                break;
            case 6:
                $folderName = "south/" . $province->name_en . "/";
                break;
            case 7:
                $folderName = "bangkok/";
                break;
            case 8:
                $folderName = "perimeter/" . $province->name_en . "/";
                break;
        }
        $path = ('docs/townplan/' . $folderName);
        rename($doc->filepath, $path . $fileName);
        // request()->file('docfile')->move(public_path($path), $fileName);

        return docsearch_provinces::where('id', $id)->update([
            'province_code' => $province->code,
            'name_th' =>  $province->name_th,
            'name_en' => $province->name_en,
            'doc_category_id' => $doc_category_id,
            'filepath' => $path . $fileName
        ]);
    }
    public function destroy(Request $request)
    {
        $id = $request->get('id');
        $doc = docsearch_provinces::find($id);
        $filename = basename($doc->filepath);
        $doc->delete();
        unlink($doc->filepath);
        return redirect()->back()->with('message', $filename . ' deleted Successfully');
    }
    public function trash()
    {
        $docsearch = docsearch_provinces::onlyTrashed()->paginate(20);
        return view('docsearch.trash', compact('docsearch'));
    }
    public function restore($id)
    {
        docsearch_provinces::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('message', 'Document restored successfully');
    }
}
