@extends('layouts.backend')

@section('content')
    <div class="container py-5">
        <div class="row">
                <div class="col-12">
                    <a href="{{url('/services-create')}}" class="btn btn-primary">Add New Services</a>
                </div>
                <div class="table-responsive py-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Title</th>
                                <th scope="col">Service Categories Titel</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $service)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{Str::limit($service->heading,15)}}</td>
                                <td>{{Str::limit($service->title,5)}}</td>
                                <td>s c t</td>
                                <td>{{Str::limit($service->description,20)}}</td>
                                <td>
                                <img src="{{asset('images/services/'.$service->image)}}" style="width:100px; height:auto;" alt="">
                                </td>
                                <td class="text-center">
                                    <a href="{{url('/services-edit',$service->id)}}" class="btn btn-danger">edit</a>
                                    {{-- <a href="{{url('/single-blog',$service->id)}}" class="btn btn-success">show</a> --}}
                                    <a href="{{url('/services-delete',$service->id)}}" class="btn btn-primary">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
@endsection
