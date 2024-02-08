<?php

namespace App\Http\Controllers;
use App\Models\BlogCategories;
use App\Models\Setting;
use Illuminate\Http\Request;

class BlogCategoriesController extends Controller
{
    public function categories_index(){
        $data['settings'] = Setting::first();
        $categories = BlogCategories::get();
        return view('blog-categories.categories-index', compact('categories'),$data);
    }
    public function categories_create(){
        $data['settings'] = Setting::first();
        return view('blog-categories.categories-create',$data);
    }
    public function categories_store(Request $request)
    {
        $data = new BlogCategories;
        $data->blog_categories = $request->blog_categories;
     
        $data->save();
        return redirect('/categories');

    }
    public function categories_edit($id){
        $blogcate = BlogCategories::find($id);
        $data['settings'] = Setting::first();
        return view('blog-categories.categories-edit', compact('blogcate'),$data);
    }
    public function categories_update(Request $request, $id)
    {
        $data = BlogCategories::find($id);
        $data->blog_categories = $request->blog_categories;

        $data->save();
        return redirect('/categories');
    }
    public function categories_delete($id)
   {
       $data = BlogCategories::find($id);
       $data->delete();

       return redirect('/categories');
   }
}
