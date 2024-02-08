<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
   public function contact(){
    $data['settings'] = Setting::first();
    return view('contacts.contact',$data);
   }
   public function contact_index(){
    $data['settings'] = Setting::first();
    $blogs = Contact::get();
    return view('contacts.contact-index', compact('blogs'),$data);
   }
   public function store(Request $request)
   {
       $data = new Contact;
    //    $data->heading = $request->heading;
    //    $data->map = $request->map;
       $data->name = $request->name;
       $data->email = $request->email;
       $data->subject = $request->subject;
       $data->message = $request->message;

       $data->save();
       return redirect('/contact-index');

   }
   public function delete($id)
   {
       $data = Contact::find($id);
       $data->delete();

       return redirect('/contact-index');
   }
}
