<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUser;
use App\Models\Role;
use App\Models\StatusConstant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {

        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    public function create() {
        if (!$this->userCan('admin')) {
            abort(403);
        }

        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    public function store(CreateUser $request) {
        $user = new User();
        $user->name = $request->input('name');
        $user->username = $request->input('username');


        $user->image = $this->uploadImage($request);

        $user->password = Hash::make($request->input('password')) ;
        $user->role_id = $request->input('role_id');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->save();

        return redirect()->route('users.index');
    }

    public function edit($id) {

        $user = User::findOrFail($id);
        $roles = Role::all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id) {
        $roles = Role::all();
        $user = User::findOrFail($id);

        $user->name = $request->input('name');
        $user->username = $request->input('username');

        if($request->hasfile('image')){
            $user->image = $this->uploadImage($request);
        }

        $user->role_id = $request->input('role_id');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        $user->save();
        return redirect()->route('users.index', compact('roles'));
    }

    public function delete($id) {

        $user = User::findOrFail($id);

        $user->delete();
        return redirect()->route('users.index')->with("record_deleted", 'Delete successfully');
    }

    public function uploadImage($request) {

        $path = null;
        if($request->hasFile('image')) {
           $img = $request->image;
           $path = $img->store('public/avatar');
        }
        return $path;
    }

    public function showUserProfile($id) {

        $user = User::findOrFail($id);
        return view('admin.users.userProfile', compact('user'));
    }
}
