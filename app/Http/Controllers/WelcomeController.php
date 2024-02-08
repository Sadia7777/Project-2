<?php

namespace App\Http\Controllers;
use App\Models\Welcome;
use App\Models\Setting;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome(){
        $data['settings'] = Setting::first();
        $data['welcome'] = Welcome::first();
        return view('home.welcome',$data);
    }
    public function welcome_index(){
        $data['settings'] = Setting::first();
        $data['welcome'] = Welcome::first();
        return view('home.welcome-index',$data);
    }
    public function welcome_edit($id){
        $data['welcome'] = Welcome::find($id);
        $data['settings'] = Setting::first();
        return view('home.welcome-edit',$data);
    }
    public function welcome_update(Request $request, $id){
        $data  = Welcome::find($id);
        $data->name = $request->name;
        $data->heading = $request->heading;

        $data->update();
        return redirect()->to('/welcome-index');

    }
}
