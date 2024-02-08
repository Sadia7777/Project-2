@extends('layouts.backend')

@section('content')
<div class="container py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
           <div class="col-6">

                <form class="row g-3 form-control" action="{{url('/about-update',$about->id)}}"  method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-12">
                        <label for="heading">Heading</label>
                        <input type="text" class="form-control" name="heading" value="{{$about->heading}}">
                    </div>
                    <div class="col-12">
                        <label for="designation">Designation</label>
                        <input type="text" class="form-control" name="designation" value="{{$about->designation}}">
                    </div>
                    <div class="col-12">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$about->title}}">
                    </div>
                    <div class="col-12">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" value="{{$about->description}}">
                    </div>
                    <div class="col-12">
                        <label for="image">Image</label>
                            <img src="{{asset('images/abouts/'.$about->image)}}" alt="">
                        <input type="file" name="image" class="form-control m-2">
                    </div>
                    <div class="col-12 text-center pb-2">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div> 
                </form>

           </div>
        </div>
    </div>
</div>
@endsection
