@extends('layouts.backend')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 pb-2">
            <a href="{{url('/categories')}}" class="btn btn-primary">Show Category List</a>
        </div>
       <div class="col-6">

            <form class="row g-3 form-control" action="{{url('/categories-store')}}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                    <label for="blog_categories">Blog Categories</label>
                    <input type="text" class="form-control" name="blog_categories" placeholder="Add a category">
                </div>
                <div class="col-12 text-center pb-2">
                    <button type="submit" class="btn btn-success">save</button>
                </div>
            </form>

       </div>
    </div>
</div>
@endsection