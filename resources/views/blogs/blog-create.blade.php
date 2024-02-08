
@extends('layouts.backend')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 pb-2">
            <a href="{{url('/blogs')}}" class="btn btn-primary">Show Blog List</a>
        </div>
       <div class="col-6">

            <form class="row g-3 form-control" action="{{url('/blog-store')}}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label for="heading">Heading</label>
                    <input type="text" class="form-control" name="heading">
                </div>
                <div class="col-12">
                    <label for="blog_category_id">Blog Category</label>
                    <select name="blog_category_id" id="" class="form-select my-2" required>
                            <option value="" hidden>Choose</option> 
                        @foreach ($categories as $item)
                          <option value="{{$item->id}}">{{$item->blog_categories}}</option>  
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="col-12">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description">
                </div>
                <div class="col-12">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="col-12 text-center pb-2">
                    <button type="submit" class="btn btn-success">save</button>
                </div>
            </form>

       </div>
    </div>
</div>
@endsection
