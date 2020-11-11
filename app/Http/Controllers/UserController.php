<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\users;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class UserController extends Controller
{

    public function index(Request $req)
    {
        $users = users::all();
        return view('user.index', ['users' => $users]);
    }

    public function create()
    {
        $users = users::all();
        return view('user.create', compact('users'));
    }
    public function store(Request $request)
    {
        $validate = $this->validate($request, [
            // 'name' => 'required|unique:users,name|min:3',
            // 'email' => 'required|unique:users,email',
            'name' => 'required|min:3',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
        ]);

        try {
            $decrypted = decrypt($request->password);
        } catch (DecryptException $e) {
            //
        }

        users::create([
            'name' => $request->name,
            'email' => $request->email,
            'user_type' => $request->user_type,
            'email_verified_at' => Carbon::now(),
            //'password' => Crypt::encryptString($request->password),
            'password' => Hash::make($request->password),
        ]);

        return redirect('/user')->with('message', 'New User created');
    }
    public function edit($id)
    {
        $user = users::find($id);
        $password = $user->password;
        //$password = Crypt::decryptString($user->password);
        return view('user.edit', compact('user','password'));
    }
    public function update($id, Request $request)
    {
        $validate = $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required',
            'password' => 'required|min:8',
        ]);

        users::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'user_type' => $request->user_type,
            'email_verified_at' => Carbon::now(),
            //'password' => md5($request->password),
            //'password' => Hash::make($request->password),
        ]);

        return redirect('/user')->with('message', 'User updated successfully');
    }
    public function destroy(Request $request)
    {
        $id = $request->get('id');
        $user = users::find($id);
        $user->delete();
        return redirect()->back()->with('message', 'User ' . $user->name . ' deleted Successfully');
    }
    public function trash()
    {
        $users = users::onlyTrashed()->paginate(20);
        return view('user.trash', compact('users'));
    }
    public function restore($id)
    {
        $user = users::find($id);
        users::onlyTrashed()->where('id', $id)->restore();
        return redirect()->back()->with('message', 'User '. $user -> name .' restored successfully');
    }
}
