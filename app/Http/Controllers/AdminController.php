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
       return view('admin.dashboard');
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
            dd($request['name']);
            return redirect()->back()->with(['fail' => 'could not login']);
        }
        return redirect()->route('admin.dashboard');
   }
}
