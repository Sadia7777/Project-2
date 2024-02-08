@extends('layouts.backend')

@section('content')
<div class="container py-5">
    <div class="row">
            <div class="table-responsive py-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#</td>
                            <td>{{$about->heading}}</td>
                            <td>{{Str::limit($about->designation,15)}}</td>
                            <td>{{Str::limit($about->title,10)}}</td>
                            <td>{{Str::limit($about->description,30)}}</td>
                            <td>
                                <img src="{{asset('images/abouts/'.$about->image)}}" style="width:100px; height:auto;" alt="">
                            </td> 
                            <td class="text-center">
                                <a href="{{url('/about-edit',$about->id)}}" class="btn btn-danger">edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
</div>
@endsection