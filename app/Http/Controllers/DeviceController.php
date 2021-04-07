<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function getDeviceIndex()
    {
        return view('Devices.index');
    }

    public function getDevice(){
        return view('Devices.single');
    }
}
