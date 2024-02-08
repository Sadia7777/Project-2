<?php

namespace App\Http\Controllers;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function service(){
        $data['settings'] = Setting::first();
        $service['services'] = Service::all();
        return view('services.service', $service,  $data);
    }

    public function single($id){
        $data = Service::find($id);
        $settings = Setting::first();
        return view('services.service-detailes', compact('data','settings'));
    }
    public function index(){
        {
            $data['settings'] = Setting::first();
            $services = Service::get();
            return view('services.services-index', compact('services'),$data);
        }
    }
    public function create(){
        $data['settings'] = Setting::first();
        return view('services.services-create',$data);
    }
    public function store(Request $request)
    {
        $data = new Service;
        $data->heading = $request->heading;
        $data->title = $request->title;
        $data->description = $request->description;

        if($request->file('image')){
            $imageName = time().".".$request->file('image')->extension();
            $request->file('image')->move(public_path('images/services/'),$imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect('/services');

    }
    public function delete($id)
    {
        $data = Service::find($id);

        $imageName = 'images/services/'.$data->image;
        if(File::exists($imageName)){
            File::delete($imageName);
        }

        $data->delete();
        return redirect('/services');
    }
    public function edit($id)
    {
        $data['settings'] = Setting::first();
        $service = Service::find($id);
        return view('services.services-edit', compact('service'),$data);
    }
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->heading = $request->heading;
        $service->title = $request->title;
        $service->description = $request->description;

        if($request->file('image')){
            $imageName = 'images/services/'.$service->image;
            if(File::exists($imageName)){
                File::delete($imageName);
            }
            $imageName = time().".".$request->file('image')->extension();
            $request->file('image')->move(public_path('images/services/'),$imageName);
            $service->image = $imageName;
        }

        $service->save();
        return redirect('/services');

    }
}
