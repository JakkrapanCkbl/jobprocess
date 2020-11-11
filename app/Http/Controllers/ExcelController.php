<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\User;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /*for test login*
        return view('home');
        */
        $users = User::All();
        return view('test.import_excel_new', compact('users'));

    }

    public function export()
    {
       return Excel::download(new UsersExport(),'users.xlsx');
    }

    public function import(Request $request)
    {
       $users = Excel::toCollection(new UsersImport(), $request->file('import_file'));
       foreach ($users[0] as $user) {
           //dd($user[1]. ' '. $user[2].' '. $user[3]);
            User::where('id', $user[0])->update([
                'name' => $user[1],
                'email' => $user[2],
                'user_type' => $user[3],
            ]);
       }
       return redirect()->route('excel');
    }
}
