<?php
namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;
class RoomController extends Controller
{
    public function getRoom($building, $room = null){
        return view('search', ['name' => $building, 'room' => $room]);
    }

    public function postRoom(Request $req)
    {
        if($req['room']  && $req->input('name'))
        {
            if(strlen($req['name'])>0)
            {
                return view('search', ['name' => $req->get('name'), 'room' => $req['room']]);
            }

            return http_redirect()->back();
        }
        return http_redirect()->back();
    }
}
