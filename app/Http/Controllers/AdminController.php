<?php

namespace App\Http\Controllers;

use App\Device;
use App\Events\CommentSave;
use App\Events\Event;
use App\Room;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
   public function getLogin()
   {
       return view('admin.login');
   }

   public function getDashBoard(){
       if(!Auth::check())
       {
           return redirect()->back();
       }
       $users = User::all();
       return view('admin.dashboard', ['users' => $users]);
   }

   public function Logout()
   {
       Auth::logout();
       return redirect()->route('home');
   }

   public function postLogin(Request $request)
   {
       $this->validate($request, [
           'name' => 'required',
           'password' => 'required'
           ]
       );
        if(!Auth::attempt([
            'email' => $request['name'],
            'password' => $request['password']
        ]))
        {
            return redirect()->back()->with(['fail' => 'could not login']);
        }
        return redirect()->route('admin.dashboard');
   }
}
