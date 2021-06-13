<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderablew
     */
    public function index()
    {
        /*for test spaties role and permission **/
        //add new  -----
        //Role::create(['name' => 'user']);
        //Permission::create(['name' => 'print']);

        //assign permission for role -----
        // $role = Role::findById(3);
        // $permission = Permission::findById(4);
        // $role->givePermissionTo($permission);

        // $role = Role::findById(4);
        // $permission = Permission::findById(4);
        // $role->givePermissionTo($permission);

        //assign permission to model_has_permissions after login (model_type = App\User) -----
        //auth()->user()->givePermissionTo('edit');
        //get info user->permission -----
        //return auth()->user()->permissions;

        //assign role to model_has_roles after login (model_type = App\User) -----
        //auth()->user()->assignRole('admin');
        //return auth()->user()->permissions;
        //return auth()->user()$user->hasRole('writer');


        // Direct permissions---------------------------------------------------------------
        //return auth()->$user->getDirectPermissions() // Or $user->permissions;

        // Permissions inherited from the user's roles
        //return auth()->$user->getPermissionsViaRoles();

        // All permissions which apply on the user (inherited and direct)
        //return auth()->$user->getAllPermissions();

        // Get info by User---------------------------------------------------------------
        //return User::role('edit')->get();
        //return User::permission('edit')->get();




        /*for test login**/
        return view('home');

       

        /**
        $users = User::All();
        return view('test.customers', compact('users'));
        **/
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
       return redirect()->route('home');
    }
}
