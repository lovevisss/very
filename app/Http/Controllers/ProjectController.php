<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('date')->only('item   ');
    }

    public function showIndex()
    {
            $list = Project::all();
            return view('project', compact('list'));

    }

    public function item($item = null)
    {
        if($item == null)
        {
        return 'no item passed through';
        }
        return "$item test passed";

    }

    public function add(ProjectRequest $request)
    {
        $name = Input::get('name');
        if(DB::table('projects')->where('name', $name)->first() !== null) return 'Already there';
        DB::table('projects')->insert(['name' => $name, 'money' => 0]);
        return Redirect::to('/project');
    }
}
