<?php
namespace App\Http\Controllers;
use App\Project;
use App\Room;
use Illuminate\Http\Request;
class RoomController extends Controller
{
    public function getHome()
    {
        $rooms = Room::all();
        return view('home', ['rooms' => $rooms]);
    }

    public function getRoom($building, $room = null){
        return view('search', ['name' => $building, 'room' => $room]);
    }

    public function postRoom(Request $req)
    {
         $this->validate($req, [
             'name' => 'required',
             'room' => 'required'
         ]);
        return view('search', ['name' => $req->get('name'), 'room' => $req['room']]);

    }
}
