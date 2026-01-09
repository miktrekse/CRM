<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   public function show($id){
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }
    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }
        public function create(){
        $users = User::all();
        return view('users.create', compact('users'));
    }
       public function edit($id){
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('users.show', ['user' => $user]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'full_name' => 'required',
            'active' => 'required'
        ]);

        $user = User::create($request->all());

        return redirect()->route('users.index')->with('success', __('User created successfully.'));
    }
}
