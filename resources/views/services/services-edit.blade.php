
@extends('layouts.backend')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
       <div class="col-6">

            <form class="row g-3 form-control" action="{{url('/services-update',$service->id)}}"  method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="col-12">
                    <label for="heading">Heading</label>
                    <input type="text" class="form-control" name="heading" value="{{$service->heading}}">
                </div>
                <div class="col-12">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="{{$service->title}}">
                </div>
                <div class="col-12">
                    <label for="description">description</label>
                    <textarea name="description" id="" cols="30" rows="3" class="form-control my-2">{{$service->description}}</textarea>
                </div>
                <div class="col-12">
                    <label for="image">Image</label>
                    <img src="{{asset('images/services/'.$service->image)}}" style="width:100px; height:auto;" alt="">
                    <input type="file" name="image" class="form-control m-2">
                </div>
                <div class="col-12 text-center pb-2">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>

       </div>
    </div>
</div>
@endsection
