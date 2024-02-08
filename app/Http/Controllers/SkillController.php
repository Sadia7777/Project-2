<?php

namespace App\Http\Controllers;
use App\Models\Skill;
use App\Models\Setting;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function skill_index(){
        $data['skills'] = Skill::get();
        $data['settings'] = Setting::first();
        return view('abouts.skills.skill-index',$data);
    }
    public function skill_create(){
        $data['settings'] = Setting::first();
        return view('abouts.skills.skill-create',$data);
    }
    public function skill_store(Request $request){
        $data = new Skill;
        $data->skill = $request->skill;
        $data->percent = $request->percent;
     
        $data->save();
        return redirect('/skill-index');
     
    }
    public function skill_edit($id){
        $data['skills'] = Skill::find($id);
        $data['settings'] = Setting::first();
        return view('abouts.skills.skill-edit',$data);
    }
    public function skill_update(Request $request, $id){
        $data = Skill::find($id);
        $data->skill = $request->skill;
        $data->percent = $request->percent;


        $data->save();
        return redirect()->to('/skill-index');

    }
    public function skill_delete($id)
    {
        $data = Skill::find($id);
        $data->delete();
 
        return redirect('/skill-index');
    }
}
