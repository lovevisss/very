<?php

namespace App\Http\Controllers;

use App\Device;
use App\Events\CommentSave;
use App\Events\Event;
use App\Room;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function getLogin()
   {
       return view('admin.login');
   }

   public function postLogin(Request $request)
   {

   }
}
