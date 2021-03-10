<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});
Route::prefix('admin')->group(function(){

    Route::get('/{building}/{room}', ['uses' => 'RoomController@getRoom', 'as' => 'findRoom']);
});

Route::get('/teaching/{name?}', function($name = null){
    return view('buildings.teaching', ['name' => $name]);
})->name('teaching');
Route::get('/lab', function(){
    return view('buildings.lab');
})->name('lab');
Route::get('/administer', function(){
    return view('buildings.administer');
})->name('administer');
Route::post('get_Address',['uses' => 'RoomController@postRoom', 'as' => 'postRoom']);

//Route::get('/test', function(){
//    return "test is right";
//});

Route::get('/test/{item?}', 'ProjectController@item');

Route::get('/testview', function ()
{
    $test = 'dd';
   return view('test',compact('test'));
});

Route::get('/computer', function ()
{
    return DB::Connection()->getDatabaseName();
});

Route::get('/users', function()
{
//   $users = DB::select("SELECT * FROM users");
//   var_dump($users);
//   $user = DB::selectOne("SELECT * FROM users WHERE id = 1");
//   dd($user);
//    return $user->occupation;
    $user = DB::table('users')->where('id', 2)->first();
    dd($user);
});


Route::get('article', function()
{
    $articles = App\Article::all();

//    $articles->delete();
//    return 'delete';
    return view('article', compact('articles'));
});

Route::get('/about', function ()
{
    return view('about');
});

Route::get('/contact', function ()
{
    $list = ['apple', 'banana', 'orange'];
    return view('contact', compact('list'));
});

Route::post('/verify', function ()
{
    var_dump($_POST);
    return 'verify';
});

Route::get('/project', ['uses' => 'ProjectController@showIndex']);


Route::post('add', ['uses' => 'ProjectController@add']);

Route::post('donate', function()
{
    $id = Input::get('id');
    $donation = Input::get('donation');
    $project = \App\Project::where('id', $id)->first();
    $project->money +=$donation;
    $project->save();
    return Redirect::to('/project');
});