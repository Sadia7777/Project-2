<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategories;
use App\Models\Setting;
use Database\Seeders\BlogSeeder;
use Illuminate\Support\Facades\File;
use Image;


class BlogController extends Controller
{
  
    public function all_blog(){
        $data['blogs'] = Blog::latest()->get();
        $data['settings'] = Setting::first();
        return view('blogs.pages.all-blog-pages', $data);
    }
    public function category_wise_blogs($id){
        $data['blogs'] = Blog::latest()->where('blog_category_id',$id)->get();
        $data['settings'] = Setting::first();
        return view('blogs.pages.category-wise-blogs', $data);
    }
  
    public function blog(){
        $data['blogCategories'] = BlogCategories::all();
        $data['blogs'] = Blog::latest()->limit('3')->get();
        $data['settings'] = Setting::first();
        return view('blogs.blog', $data);
    }
    public function single($id){
        $data = Blog::find($id);
        $settings = Setting::first();
        return view('blogs.blog-single', compact('data','settings'));
    }

    public function index(){
        {
            $blogs = Blog::get();
            $data['settings'] = Setting::first();
            return view('blogs.blog-index', compact('blogs'),$data);
        }
    }
    public function create(){
        $data['categories'] = BlogCategories::all();
        $data['settings'] = Setting::first();
        return view('blogs.blog-create',$data,);
    }
    public function store(Request $request)
    {
        $data = new Blog;
        $data->heading = $request->heading;
        $data->blog_category_id = $request->blog_category_id;
        $data->title = $request->title;
        $data->description = $request->description;

        if($request->file('image')){
            $imageName = time().".".$request->file('image')->extension();

            $path = public_path('images/blogs/');
            $img = Image::make($request->file('image')->path());
            $img->resize(420,250)->save($path.'/'.$imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect('/blogs');

    }
    public function delete($id)
    {
        $data = Blog::find($id);

        $imageName = 'images/blogs/'.$data->image;
        if(File::exists($imageName)){
            File::delete($imageName);
        }

        $data->delete();
        return redirect('/blogs');
    }
    public function edit($id)
    {
        $blog = Blog::find($id);
        $data['categories'] = BlogCategories::all();
        $data['settings'] = Setting::first();
        return view('blogs.blog-edit', compact('blog'),$data);
    }
    public function update(Request $request, $id)
    {
        $data = Blog::find($id);
        $data->heading = $request->heading;
        $data->title = $request->title;
        $data->description = $request->description;

        if($request->file('image')){
            $imageName = 'images/blogs/'.$data->image;
            if(File::exists($imageName)){
                File::delete($imageName);
            }
            $imageName = time().".".$request->file('image')->extension();

            $path = public_path('images/blogs/');
            $img = Image::make($request->file('image')->path());
            $img->resize(420,250)->save($path.'/'.$imageName);
            $data->image = $imageName;
        }

        $data->save();
        return redirect('/blogs');

    }
}
