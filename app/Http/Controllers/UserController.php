<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use DB;

class UserController extends Controller {
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $users = DB::table('role_user')
            ->join('users', 'role_user.user_id', '=', 'users.id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->orderBy('roles.id', 'ASC')
            ->where('roles.id', '=', 1)
            ->orWhere('roles.id', '=', 2)                    
            ->select('users.*', 'roles.id', 'roles.slug')
            ->get();

        $inv = User::where('define', '=', 'no')->get();            

        //return view('dashboard.lite.views.users.index')->with('users', $users);
        return view('DashboardX.Views.Users.index')->with('users', $users)->with('inv', $inv);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('DashboardX.Views.Users.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $type = Role::find($request->type);

        // Crear Administrador - Geolocalizador
        $user = new User($request->except(['type', 'password']));
        $user->password = Bcrypt($request->password); 
        $user->define = 'yes';                       
        $user->save();

        $user->roles()->attach($type);
        
        return redirect()->route('user.index');        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {

        $user = User::where('identity', $id)->first();        
        return view('DashboardX.Views.Users.edit')->with(['user' => $user]);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, Request $request) {               
                
        if($request->genre){ $user->genre = $request->genre; }
        if($request->password) { $user->password = Bcrypt($request->password); }

        if($request->type) { 
            $type = Role::find($request->type); 
            $user->roles()->sync($type);
        } 

        // Actualizar Administrador - Geolocalizador
        $user->update($request->except(['type', 'password', 'genre']));
        
        return redirect()->route('user.index');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id) {

        $user = User::where('identity', $id)->first();
        $user->delete();

        return redirect()->route('user.index');

    }

}
