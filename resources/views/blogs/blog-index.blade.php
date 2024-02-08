@extends('layouts.backend')

@section('content')
    <div class="container py-5">
        <div class="row">
                <div class="col-12">
                    <a href="{{url('/blog-create')}}" class="btn btn-primary">Add New Blog</a>
                </div>
                <div class="table-responsive py-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $item)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{Str::limit($item->heading,20)}}</td>
                                <td>{{Str::limit($item->title,20)}}</td>
                                <td>{{$item->BlogCategory->blog_categories}}</td>
                                {{-- <td>{{$item->blog_category_id}}</td> --}}
                                <td>{{Str::limit($item->description,20)}}</td>
                                <td>
                                <img src="{{asset('images/blogs/'.$item->image)}}" style="width:100px; height:auto;" alt="">
                                </td>
                                <td class="text-center">
                                    <a href="{{url('/blog-edit',$item->id)}}" class="btn btn-danger">edit</a>
                                    <a href="{{url('/single-blog',$item->id)}}" class="btn btn-success">show</a>
                                    <a href="{{url('/blog-delete',$item->id)}}" class="btn btn-primary">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
@endsection
