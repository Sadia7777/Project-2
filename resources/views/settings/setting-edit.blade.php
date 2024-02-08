@extends('layouts.backend')

@section('content')
<div class="container py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
           <div class="col-6">

                <form class="row g-3 form-control" action="{{url('/settings-update',$settings->id)}}"  method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="col-12">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$settings->title}}">
                    </div>
                    <div class="col-12">
                        <label for="logo">Logo</label>
                        <img src="{{asset('images/settings/'.$settings->logo)}}" style="width:80px; height:auto;" alt="">
                        <input type="file" name="logo" class="form-control m-2">
                    </div>
                    <div class="col-12">
                        <label for="favicon">Favicon</label>
                        <img src="{{asset('images/settings/'.$settings->favicon)}}" style="width:80px; height:auto;" alt="">
                        <input type="file" name="favicon" class="form-control m-2">
                    </div>
                    <div class="col-12">
                        <label for="tuter">Twitter</label>
                        <input type="text" class="form-control" name="tuter" value="{{$settings->tuter}}">
                    </div>
                    <div class="col-12">
                        <label for="facebook">Facebook</label>
                        <input type="text" class="form-control" name="facebook" value="{{$settings->facebook}}">
                    </div>
                    <div class="col-12">
                        <label for="instragram">Instragram</label>
                        <input type="text" class="form-control" name="instragram" value="{{$settings->instragram}}">
                    </div>
                    <div class="col-12">
                        <label for="linkdin">Linkedin</label>
                        <input type="text" class="form-control" name="linkdin" value="{{$settings->linkdin}}">
                    </div>
                    <div class="col-12">
                        <label for="map">Map</label>
                        <input type="text" class="form-control" name="map" value="{{$settings->map}}">
                    </div>
                    <div class="col-12">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" value="{{$settings->location}}">
                    </div>
                    <div class="col-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{$settings->email}}">
                    </div>
                    <div class="col-12">
                        <label for="call">Call</label>
                        <input type="text" class="form-control" name="call" value="{{$settings->call}}">
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
