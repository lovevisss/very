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
    public function getLab()
    {
        $rooms = Room::all();
        return view('building.lab', ['rooms' => $rooms]);
    }

    public function addRoom(Request $req)
    {
        $this->validate($req,[
            'name'=> 'required',

            ]);
        $room = new Room();
        $room->building = $req->building;
        $room->name = $req->name;
        $room->owner_id = $req->owner_id;
        $room->device_num = $req->device_num;
        $room->save();
        $rooms = Room::all();
        return redirect(route('getLab', ['room' => $rooms]));



    }

}
