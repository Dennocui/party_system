<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;


class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
      $request->user()->authorizeRoles(['Admin', 'Registra']);
      return view('home');
    }
    
    /*
    public function someAdminStuff(Request $request)
    {
      $request->user()->authorizeRoles('manager');
      return view(‘some.view’);
    }
    */

    public function users()
    {
      $users = User::all();
      return view('users.index')->with('users', $users);
    }

    public function show($id)
    {
      $user = User::find($id);
      return view('users.show')->with('user', $user);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        
        return redirect('/users')->with('success', 'User Removed');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('users.edit')
        ->with('roles', $roles)
        ->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->roles[0]->pivot->role_id = $request->input('role'); 
        //$user->pivot->save();
        $user->save();

        

        //return $user;
        return redirect('/users')->with('success', 'User Edited');
    }
}
