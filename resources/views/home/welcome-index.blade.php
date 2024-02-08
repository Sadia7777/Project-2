@extends('layouts.backend')

@section('content')
<div class="container py-5">
    <div class="row">
            <div class="table-responsive py-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Image</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>{{$welcome->name}}</td>
                            <td>{{$welcome->heading}}</td>
                            <td>
                                {{-- <img src="{{asset('images/blogs/'.$item->image)}}" style="width:100px; height:auto;" alt=""> --}}
                            </td> 
                            <td class="text-center">
                                <a href="{{url('/welcome-edit',$welcome->id)}}" class="btn btn-danger">edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>
</div>
@endsection