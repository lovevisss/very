<?php
namespace App\Http\Controllers;
use App\Device;
use App\Room;
use App\User;
use Illuminate\Http\Request;
class RoomController extends Controller
{
    public function getHome()
    {
        $rooms = Room::all();
        return view('home', ['rooms' => $rooms]);
    }

    public function getRoom($building, $room = null){
        $r = Room::with('devices')->where('name', $room)->where('building', $building)->first();


        return view('room.room', ['room' => $r]);
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
        $owners = User::all();
        return view('buildings.lab', ['rooms' => $rooms, 'owners' => $owners]);
    }

    public function addRoom(Request $req)
    {
        $this->validate($req,[
            'name'=> 'required',

            ]);
        if(Room::where('building', $req->building)->where('name', $req->name)->first())
        {
            $rooms = Room::all();
            return redirect(route('getLab', ['room' => $rooms]))->with(['success' => '已存在!']) ;
        }
        $room = new Room();
        $room->building = $req->building;
        $room->name = $req->name;
        $room->owner_id = $req->owner_id;
        $room->save();
        $rooms = Room::all();
        return redirect(route('getLab', ['room' => $rooms]))->with(['success' => '创建成功!']) ;

    }

    public function deleteRoom($id)
    {
        $room = Room::find($id);
        $room->delete();
        $rooms = Room::all();
        return redirect(route('getLab', ['room' => $rooms]))->with(['success' => '删除成功!']) ;
    }

}
