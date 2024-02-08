@extends('layouts.backend')

@section('content')
<div class="container py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
           <div class="col-6">

                <form class="row g-3 form-control" action="{{url('/welcome-update',$welcome->id)}}"  method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$welcome->name}}">
                    </div>
                    <div class="col-12">
                        <label for="heading">Heading</label>
                        <input type="text" class="form-control" name="heading" value="{{$welcome->heading}}">
                    </div>
                    <div class="col-12">
                        <label for="bg_image">Image</label>
                        <img src="{{asset('images/settings/')}}" style="width:80px; height:auto;" alt="">
                        <input type="file" name="bg_image" class="form-control m-2">
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
