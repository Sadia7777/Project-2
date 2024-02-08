<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index(){
        $data['settings'] = Setting::first();
        return view('settings.settings-index',$data);
    }
    public function edit($id){
        $data['settings'] = Setting::find($id);
        return view('settings.setting-edit',$data);
    }
    public function update(Request $request, $id){
        $data = Setting::find($id);
        $data->title = $request->title;

        if($request->file('logo')){
            $logoName = 'images/settings/'.$data->logo;
            if(File::exists($logoName)){
                File::delete($logoName);
            }
                $logoName = time().".".$request->file('logo')->extension();
                $request->file('logo')->move(public_path('images/settings/'),$logoName);
                $data->logo = $logoName;
        }
        if($request->file('favicon')){
            $faviconName = 'images/settings/'.$data->favicon;
            if(File::exists($faviconName)){
                File::delete($faviconName);
            }
                $faviconName = time().".".$request->file('favicon')->extension();
                $request->file('favicon')->move(public_path('images/settings/'),$faviconName);
                $data->favicon = $faviconName;
        }

        $data->tuter = $request->tuter;
        $data->facebook = $request->facebook;
        $data->instragram = $request->instragram;
        $data->linkdin = $request->linkdin;
        $data->tuter = $request->tuter;
        $data->map = $request->map;
        $data->location = $request->location;
        $data->call = $request->call;
        $data->email = $request->email;

        $data->update();
        return redirect()->to('/settings');
    }
}
