<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
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
    

    public function show() {
    	$user = user::all();
    	return view('pages.daftarusers',compact('user'));
    }

    protected function create(Request $request)
    {
        $request->validate([
            'name' => 'unique:users',
            'email' => 'unique:users',
            'password' => 'confirmed'
        ]);

        

      
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request['password']);
        $user->save();

        return redirect()->route('user.list')->with('success','Mambuat data user baru');

        
    }


    protected function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        
        if(isset($request->name))
        {
           $request->validate([
            'name' => 'unique:users'
            ]); 
            $user->name = $request->name;
            $user->save();
            return redirect()->back()->with('success','Mengedit user');
        }
        

        else if(isset($request->email))
        {
           $request->validate([
            'email' => 'unique:users'
            ]); 
            $user->email = $request->email;
            $user->save();
            return redirect()->back()->with('success','Mengedit user');
        }
        else if(isset($request->password))
        {
            $request->validate([
            'password' => 'confirmed'
            ]);
            $user->password = bcrypt($request['password']);  
            $user->save();
            return redirect()->back()->with('success','Mengedit user'); 
        }
             
        $user->save();
        return redirect()->back();    
    }

    public function destroy($id)
    {
        user::where('id', $id)->delete();
        return redirect()->back()->with('warning','Menghapus akun user');
    }
}
