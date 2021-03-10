<?php
namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;
class RoomController extends Controller
{
    public function getRoom($building, $room = null){
        return view('search', ['name' => $building, 'room' => $room]);
    }
}
