<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use App\Models\About;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class AboutController extends Controller
{
  public function about(){
    $data['about'] = About::first();
    $data['settings'] = Setting::first();
    $data['skills'] = Skill::all();
    return view('abouts.about', $data);
  }  
 
  public function about_index(){
    $data['about'] = About::first();
    $data['settings'] = Setting::first();
    return view('abouts.about-index', $data);
  }  
  public function about_edit($id){
    $data['about'] = About::find($id);
    $data['settings'] = Setting::first();
    return view('abouts.about-edit', $data);
  }  
  public function about_update(Request $request, $id){
    $data = About::find($id);
    $data->heading = $request->heading;
    $data->designation = $request->designation;
    $data->title = $request->title;
    $data->description = $request->description;


    if($request->file('image')){
      $imageName = 'images/abouts/'.$data->image;
      if(File::exists($imageName)){
          File::delete($imageName);
      }
      $imageName = time().".".$request->file('image')->extension();
      // $request->file('image')->move(public_path('images/abouts/'),$imageName);
      $path = public_path('images/abouts/');
      $img = Image::make($request->file('image')->path());
      $img->resize(420,250)->save($path.'/'.$imageName);
      // $path = public_path('images/abouts/');
      // $img = Image::make($request->file('image')->path());
      // $img->resize(420,250)->save($path.'/'.$imageName);
      $data->image = $imageName;
  }

    $data->save();
    return redirect()->to('/about-index');
    
  }  
}
